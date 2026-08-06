<?php
require __DIR__ . '/includes/contact-handler.php';
?>
<?php include 'includes/header.php'; ?>

<section class="product-hero animate-fade-up">
  <img src="<?php echo SITE_ROOT; ?>/images/product-detail-hero.jpg" alt="Contact Skan Inc.">
  <div class="product-hero-overlay"></div>
  <div class="product-hero-content">
    <h1>Contact Us</h1>
  </div>
</section>

<main class="contact-page">
  <div class="contact-page-inner">
    <section class="contact-copy animate-on-scroll">
      <h2>Let's discuss your requirements</h2>
      <p>Whether you are planning a cleanroom, modular operation theatre, laboratory, or need specialised hygiene and decontamination equipment, our team can help you identify the right solution.</p>

      <div class="contact-details">
        <div class="contact-detail-card">
          <div class="contact-detail-icon"><img src="<?php echo SITE_ROOT; ?>/images/icon-address.svg" alt=""></div>
          <div>
            <h3>Visit Us</h3>
            <p>Skan Inc.<br>219, 2nd Floor, Udyog Mandir - 1,<br>7-C, Pitamber Lane, Bhagoji Keer Marg,<br>Behind Paradise Cinema,<br>Mahim West, Mumbai - 400016.</p>
          </div>
        </div>

        <div class="contact-detail-card">
          <div class="contact-detail-icon"><img src="<?php echo SITE_ROOT; ?>/images/icon-phone.svg" alt=""></div>
          <div>
            <h3>Call Us</h3>
            <a href="tel:+917506082837">+91 75060 82837</a>
          </div>
        </div>

        <div class="contact-detail-card">
          <div class="contact-detail-icon"><img src="<?php echo SITE_ROOT; ?>/images/icon-email.svg" alt=""></div>
          <div>
            <h3>Email Us</h3>
            <a href="mailto:skaninc1@gmail.com">skaninc1@gmail.com</a>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-form-panel animate-on-scroll">
      <h2>Send an enquiry</h2>
      <p>Share a few details about your requirement and our team will get back to you.</p>

      <form class="contact-form" method="post" action="<?php echo SITE_ROOT; ?>/contact.php">
        <div class="contact-honeypot" aria-hidden="true">
          <label for="website">Website</label>
          <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
        </div>

        <?php if ($formMessage !== ''): ?>
          <div class="form-status <?php echo htmlspecialchars($formStatus); ?>" role="status">
            <?php echo htmlspecialchars($formMessage); ?>
          </div>
        <?php endif; ?>

        <div class="form-field">
          <label for="name">Name *</label>
          <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($values['name']); ?>" required autocomplete="name">
        </div>

        <div class="form-field">
          <label for="email">Email *</label>
          <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($values['email']); ?>" required autocomplete="email">
        </div>

        <div class="form-field">
          <label for="phone">Phone *</label>
          <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($values['phone']); ?>" required autocomplete="tel">
        </div>

        <div class="form-field">
          <label for="company">Company *</label>
          <input type="text" id="company" name="company" value="<?php echo htmlspecialchars($values['company']); ?>" required autocomplete="organization">
        </div>

        <div class="form-field full-width">
          <label for="subject">Subject *</label>
          <input type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($values['subject']); ?>" required>
        </div>

        <div class="form-field full-width">
          <label for="message">Message *</label>
          <textarea id="message" name="message" required><?php echo htmlspecialchars($values['message']); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary contact-submit">Send Enquiry</button>
      </form>
    </section>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
