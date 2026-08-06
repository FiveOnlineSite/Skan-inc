<?php

use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

$mailConfig = require __DIR__ . '/mail-config.php';
$pageTitle = 'Contact Us';
$formStatus = '';
$formMessage = '';
$values = [
  'name' => '',
  'email' => '',
  'phone' => '',
  'company' => '',
  'subject' => '',
  'message' => '',
];
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'GET' && ($_GET['sent'] ?? '') === '1') {
  $formStatus = 'success';
  $formMessage = 'Thank you. Your enquiry has been sent successfully.';
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
  foreach ($values as $field => $value) {
    $values[$field] = trim($_POST[$field] ?? '');
  }

  $honeypotIsEmpty = empty($_POST['website']);

  if (!$honeypotIsEmpty) {
    $formStatus = 'error';
    $formMessage = 'Your enquiry could not be verified. Please refresh the page and try again.';
  } elseif ($values['name'] === '' || $values['phone'] === '' || $values['company'] === '' || $values['subject'] === '' || $values['message'] === '') {
    $formStatus = 'error';
    $formMessage = 'Please complete all required fields.';
  } elseif (!filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
    $formStatus = 'error';
    $formMessage = 'Please enter a valid email address.';
  } elseif ($mailConfig['username'] === '' || $mailConfig['password'] === '') {
    $formStatus = 'error';
    $formMessage = 'Email delivery is not configured yet. Please email us directly at skaninc1@gmail.com.';
    error_log('Contact form SMTP credentials are not configured.');
  } else {
    $safeSubject = preg_replace('/[\r\n]+/', ' ', $values['subject']);
    $fromEmail = $mailConfig['from_email'] !== '' ? $mailConfig['from_email'] : $mailConfig['username'];
    $escape = static function (string $value): string {
      return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    };

    $plainBody = "New website enquiry\n\n"
      . "Name: {$values['name']}\n"
      . "Email: {$values['email']}\n"
      . "Phone: {$values['phone']}\n"
      . "Company: {$values['company']}\n"
      . "Subject: {$safeSubject}\n\n"
      . "Message:\n{$values['message']}\n";

    $htmlBody = '<h2>New website enquiry</h2>'
      . '<p><strong>Name:</strong> ' . $escape($values['name']) . '</p>'
      . '<p><strong>Email:</strong> ' . $escape($values['email']) . '</p>'
      . '<p><strong>Phone:</strong> ' . $escape($values['phone']) . '</p>'
      . '<p><strong>Company:</strong> ' . $escape($values['company']) . '</p>'
      . '<p><strong>Subject:</strong> ' . $escape($safeSubject) . '</p>'
      . '<p><strong>Message:</strong><br>' . nl2br($escape($values['message'])) . '</p>';

    try {
      $mail = new PHPMailer(true);
      $mail->isSMTP();
      $mail->Host = $mailConfig['host'];
      $mail->SMTPAuth = true;
      $mail->Username = $mailConfig['username'];
      $mail->Password = $mailConfig['password'];
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = $mailConfig['port'];
      $mail->CharSet = PHPMailer::CHARSET_UTF8;

      $mail->setFrom($fromEmail, $mailConfig['from_name']);
      $mail->addAddress($mailConfig['recipient_email'], $mailConfig['recipient_name']);
      $mail->addReplyTo($values['email'], $values['name']);

      $mail->isHTML(true);
      $mail->Subject = 'Website enquiry: ' . $safeSubject;
      $mail->Body = $htmlBody;
      $mail->AltBody = $plainBody;
      $mail->send();
      header('Location: ' . SITE_ROOT . '/contact.php?sent=1', true, 303);
      exit;
    } catch (Throwable $exception) {
      error_log('Contact form SMTP error: ' . $exception->getMessage());
      $formStatus = 'error';
      $formMessage = 'We could not send your enquiry right now. Please email us directly at skaninc1@gmail.com.';
    }
  }
}
