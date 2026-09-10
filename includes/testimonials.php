<?php
$testimonials = [

  [
    'text' => 'We are using SKAN FOG ULV Fogging machine since last 3 years. This product is certified from our microbiology department, which tests all products in connection with infection control. The After sales support provided by Skan Inc. is excellent and prompt.',
    'name' => 'P.D Hinduja National Hospital',
    'meta' => '27 Sept 2007',
  ],

  [
    'text' => 'We are using SKAN FOG ULV fogging machine for 4 years now and the product quality and the service rendered by Skan Inc. is satisfactory.',
    'name' => 'Holy Cross Hospital',
    'meta' => '06 Apr 2010',
  ],
  [
    'text' => 'For the last two years we have been using the fogging machine, SKAN FOG ULV, and we are satisfied with its performance and with the after sales service provided by Skan Inc.',
    'name' => 'Jagjivan Ram Hospital',
    'meta' => '08 Apr 2010',
  ],
  [
    'text' => 'We, at SR Mehta & Sir KP Cardiac institute, have been using the Incidur Solution and fumigation supplied by Skan Inc. for the past 6 years and are very happy with their after sales support.',
    'name' => 'Premchand Cardiac Institute',
    'meta' => '28 Sept 2007',
  ],
  [
    'text' => 'We are using SKAN FOG ULV fogging machine supplied by Skan Inc. since 3 years. We are satisfied with the product and the service support.',
    'name' => 'C Rly Hospital, Byculla',
    'meta' => '05 Apr 2010',
  ],

  [
    'text' => '2 years ago, Skan Inc. has supplied us their fogging machine SKAN FOG ULV and disinfecting chemicals, which were tested in our microbiology department. The performance of these products was found to be as per our satisfaction. Our dealing with Skan Inc. has been satisfactory owing to good quality of products and prompt service support.',
    'name' => 'Saifee Hospital',
    'meta' => '29 Sept 2007',
  ],
  [
    'text' => 'We are happy with the performance of SKAN FOG ULV fogging machine which we have been using for 5 years now. Service support is prompt and we are satisfied with Skan Inc.',
    'name' => 'Breach Candy Hospital Trust',
    'meta' => '16 Mar 2010',
  ],
  [
    'text' => 'Had a seamless experience with Skan Inc with regards to our OT laminar air flow system. We replaced our Hepa filters through them.  Professional job done, in time , and at a good rate. Shall recommend them indeed.',
    'name' => 'Rutuj Kamdar',
    'meta' => 'Client Feedback',
  ],
  [
    'text' => 'Skan Inc. helped us bring the modular OT systems together in a practical and organised way, with responsive support during installation and commissioning.',
    'name' => 'Vishal Rathore',
    'meta' => 'Client Feedback',
  ],
  [
    'text' => 'Skan Inc is professional company with good sales ND service support...the product quality is very good.',
    'name' => 'Chandan Bhoyar',
    'meta' => 'Client Feedback',
  ],
  [
    'text' => 'Good service',
    'name' => 'Manshi Kadam',
    'meta' => 'Client Feedback',
  ],
  [
    'text' => 'Very professional and good service',
    'name' => 'Prasad Gupta',
    'meta' => 'Client Feedback',
  ],
];

$testimonialClientLogos = [
  'P.D Hinduja National Hospital' => 'hinduja.png',
  'Holy Cross Hospital' => 'holy-cross.jpg',
  'C Rly Hospital, Byculla' => 'railways.png',
  'Jagjivan Ram Hospital' => 'railways.png',
  'Saifee Hospital' => 'saifee.png',
  'Breach Candy Hospital Trust' => 'breachcandy.png',
  'Premchand Cardiac Institute' => 'cardiac.png'
];
?>

<section id="testimonials" class="testimonials">
  <div class="testimonials-inner">
    <h2 class="animate-on-scroll">Voices of Trust &amp; Reliability</h2>
    <div class="slider-container">
      <div class="testimonials-track" id="testimonialsTrack">
        <?php foreach ($testimonials as $index => $testimonial): ?>
          <div class="testimonial-card">
            <img src="<?php echo SITE_ROOT; ?>/images/stars.svg" alt="5 stars" class="testimonial-stars">
            <p class="testimonial-text testimonial-text--clamped" id="testimonialText<?php echo $index; ?>">
              <?php echo htmlspecialchars($testimonial['text']); ?>
            </p>
            <button class="testimonial-toggle" type="button" aria-haspopup="dialog" aria-controls="testimonialModal"
              data-testimonial-id="testimonialText<?php echo $index; ?>"
              data-testimonial-title="<?php echo htmlspecialchars($testimonial['name'], ENT_QUOTES); ?>">Read
              more</button>
            <div class="testimonial-author">
              <?php if (isset($testimonialClientLogos[$testimonial['name']])): ?>
                <img src="<?php echo SITE_ROOT; ?>/images/<?php echo $testimonialClientLogos[$testimonial['name']]; ?>"
                  alt="<?php echo htmlspecialchars($testimonial['name']); ?> logo"
                  class="testimonial-avatar testimonial-avatar--logo">
              <?php else: ?>
                <?php
                $nameWords = preg_split('/\s+/', trim(preg_replace('/[^A-Za-z0-9 ]/', ' ', $testimonial['name'])));
                $initials = strtoupper(substr($nameWords[0], 0, 1) . (isset($nameWords[1]) ? substr($nameWords[1], 0, 1) : ''));
                ?>
                <span class="testimonial-avatar testimonial-avatar--initials"
                  aria-hidden="true"><?php echo htmlspecialchars($initials); ?></span>
              <?php endif; ?>
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

<div class="testimonial-modal" id="testimonialModal" role="dialog" aria-modal="true"
  aria-labelledby="testimonialModalTitle" hidden>
  <div class="testimonial-modal__backdrop" data-testimonial-close></div>
  <div class="testimonial-modal__content" role="document">
    <button class="testimonial-modal__close" type="button" aria-label="Close testimonial"
      data-testimonial-close>&times;</button>
    <h2 id="testimonialModalTitle">Client testimonial</h2>
    <p id="testimonialModalText"></p>
  </div>
</div>
