<?php

$localConfigPath = __DIR__ . '/mail-config.local.php';
$localConfig = is_file($localConfigPath) ? require $localConfigPath : [];

return array_merge([
  'host' => getenv('SKAN_SMTP_HOST') ?: 'smtp.gmail.com',
  'port' => (int) (getenv('SKAN_SMTP_PORT') ?: 587),
  'username' => getenv('SKAN_SMTP_USERNAME') ?: '',
  'password' => getenv('SKAN_SMTP_PASSWORD') ?: '',
  'from_email' => getenv('SKAN_SMTP_FROM_EMAIL') ?: '',
  'from_name' => getenv('SKAN_SMTP_FROM_NAME') ?: 'Skan Inc. Website',
  'recipient_email' => getenv('SKAN_CONTACT_RECIPIENT') ?: 'skaninc1@gmail.com',
  'recipient_name' => getenv('SKAN_CONTACT_RECIPIENT_NAME') ?: 'Skan Inc.',
], $localConfig);
