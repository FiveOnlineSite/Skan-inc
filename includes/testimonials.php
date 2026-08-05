<?php
$testimonials = [
  [
    'text' => 'We are using SKAN FOG ULV fogging machine for 4 years now and the product quality and the service rendered by Skan Inc is satisfactory.',
    'name' => 'Holy Cross Hospital',
    'meta' => '06th Apr 2010',
  ],
  [
    'text' => 'The cleanroom solution was planned carefully around our operational requirements, and the installation team maintained good coordination throughout the project.',
    'name' => 'Pharmaceutical Facility Client',
    'meta' => 'Client Feedback',
  ],
  [
    'text' => 'Skan Inc. helped us bring the modular OT systems together in a practical and organised way, with responsive support during installation and commissioning.',
    'name' => 'Hospital Infrastructure Client',
    'meta' => 'Client Feedback',
  ],
  [
    'text' => 'The team understood our laboratory requirements and provided equipment and infrastructure solutions that were easy to operate, clean, and maintain.',
    'name' => 'Laboratory Project Client',
    'meta' => 'Client Feedback',
  ],
  [
    'text' => 'Product performance, timely service, and dependable technical assistance have made Skan Inc. a reliable partner for our controlled-environment requirements.',
    'name' => 'Healthcare Facility Client',
    'meta' => 'Client Feedback',
  ],
    [
    'text' => 'Product performance, timely service, and dependable technical assistance have made Skan Inc. a reliable partner for our controlled-environment requirements.',
    'name' => 'Healthcare Facility Client',
    'meta' => 'Client Feedback',
  ],
];
?>

<section id="testimonials" class="testimonials">
  <div class="testimonials-inner">
    <h2 class="animate-on-scroll">Voices of Trust &amp; Reliability</h2>
    <div class="slider-container">
      <div class="testimonials-track" id="testimonialsTrack">
        <?php foreach ($testimonials as $testimonial): ?>
          <div class="testimonial-card">
            <img src="<?php echo SITE_ROOT; ?>/images/stars.svg" alt="5 stars" class="testimonial-stars">
            <p class="testimonial-text"><?php echo htmlspecialchars($testimonial['text']); ?></p>
            <div class="testimonial-author">
              <img src="<?php echo SITE_ROOT; ?>/images/avatar.png" alt="" class="testimonial-avatar">
              <div>
                <p class="testimonial-name"><?php echo htmlspecialchars($testimonial['name']); ?></p>
                <p class="testimonial-date"><?php echo htmlspecialchars($testimonial['meta']); ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="slider-pagination" id="sliderPagination"></div>
  </div>
</section>
