<?php

$foggingMachineContent = [
  'Selecting a fogging machine begins with the space, application method and coverage requirement. Consider the room volume, the type of solution being used and the practical access available for an operator during treatment.',
  'ULV equipment is often chosen where a fine, consistent aerosol is needed. Tank capacity, output control, timer functions and the ease of cleaning the machine all affect how well it fits into a regular workflow.',
  'Always follow the chemical manufacturer\'s instructions, site safety procedures and applicable local requirements. A documented process for preparation, application and post-treatment cleaning helps teams use the equipment consistently.',
];

$otEquipmentContent = [
  'Operating theatre equipment should be planned as one coordinated environment rather than as separate purchases. The layout, clinical workflow, service access and connections for utilities all influence day-to-day usability.',
  'Prioritise equipment that supports safe movement around the theatre and leaves clear access for cleaning and maintenance. Surgical lights, pendants, tables, control systems and storage should be considered alongside the room\'s HVAC and electrical design.',
  'A clear equipment schedule, coordinated drawings and early input from clinical and engineering teams reduce changes during installation. Handover documentation and staff familiarisation then help the theatre operate as intended.',
];

$ultrasonicCleanerContent = [
  'Industrial ultrasonic cleaners use high-frequency sound waves in a cleaning solution to help remove contaminants from components with detailed surfaces, recesses and hard-to-reach areas.',
  'When choosing a unit, assess the tank size, load type, cleaning chemistry, temperature control and cycle requirements. Basket design and drainage arrangements are also important for a practical and repeatable process.',
  'The cleaning solution, operating temperature and cycle time should be selected for the material and contamination involved. Follow equipment instructions and site procedures for safe handling, rinsing, drying and maintenance.',
];

return [
  [
    'slug' => 'choosing-a-fogging-machine',
    'category' => 'Fogging & decontamination',
    'title' => 'Choosing a Fogging Machine: Key Factors for Effective Coverage',
    'excerpt' => 'A practical guide to selecting ULV fogging equipment for your space, workflow and treatment requirements.',
    'image' => 'images/products/ulv-skd1100-steel.png',
    'detail_image' => 'images/products/ulv-tantra.png',
    'content' => $foggingMachineContent,
  ],
  [
    'slug' => 'operating-theatre-equipment-planning',
    'category' => 'Operating theatre design',
    'title' => 'Operating Theatre Equipment: Planning a Functional OT',
    'excerpt' => 'Key planning considerations for coordinated, maintainable operating theatre equipment and layouts.',
    'image' => 'images/products/led-surgical-lights.png',
    'detail_image' => 'images/products/ot-pendant.png',
    'content' => $otEquipmentContent,
  ],
  [
    'slug' => 'industrial-ultrasonic-cleaners-guide',
    'category' => 'Industrial cleaning',
    'title' => 'Industrial Ultrasonic Cleaners: A Guide to Selection and Use',
    'excerpt' => 'Understand tank capacity, cleaning cycles and workflow considerations when selecting an ultrasonic cleaner.',
    'image' => 'images/products/ultrasonic-cleaners.png',
    'detail_image' => 'images/product-cleanroom.jpg',
    'content' => $ultrasonicCleanerContent,
  ],
];
