<?php

$medicalGasContent = [
  'Medical gas systems are central to patient-care areas, so planning should begin with the facility’s clinical requirements, room schedule and expected future demand. The source equipment, distribution network and terminal units need to be considered as one connected system.',
  'Access for inspection and maintenance is as important as initial installation. Clearly identified zones, documented routes and coordinated service access can make future testing and repairs less disruptive to daily operations.',
  'Every project should be designed, installed and verified by qualified professionals in accordance with the applicable local codes, standards and hospital procedures. A structured handover with drawings, operating information and maintenance records supports long-term reliability.',
];

$airflowContent = [
  'Operating-theatre ventilation is not only an equipment decision. Room layout, ceiling coordination, supply and return locations, door use and maintenance access all influence how a system performs in day-to-day use.',
  'A practical design allows filters and critical components to be inspected without unnecessary disruption. Teams should also plan for controls, monitoring points and service clearances early, before construction details are fixed.',
  'Ventilation requirements vary by facility and procedure type. Working with qualified healthcare-design and engineering professionals helps ensure that the final approach follows the applicable standards and supports the facility’s infection-prevention programme.',
];

$equipmentCareContent = [
  'Shared medical equipment needs a clear cleaning process that staff can follow reliably between uses. The process should identify who is responsible, which surfaces or components are included, and when the task must be completed.',
  'Equipment materials and manufacturer instructions matter when selecting cleaning products and methods. A compatible process helps protect the device while supporting the facility’s infection-prevention procedures.',
  'Written instructions, staff training and routine checks make the workflow easier to maintain. Facilities should review their process whenever equipment, products or local requirements change.',
];

return [
  [
    'slug' => 'medical-gas-pipeline-planning',
    'category' => 'Medical infrastructure',
    'title' => 'Medical Gas Pipeline Planning: What Facilities Should Consider',
    'excerpt' => 'A practical look at the design decisions that support reliable medical-gas delivery from source to point of use.',
    'image' => 'images/medical-pipeline.png',
    'content' => $medicalGasContent,
  ],
  [
    'slug' => 'operating-theatre-airflow-planning',
    'category' => 'Operating theatre design',
    'title' => 'Operating Theatre Airflow: Planning for Performance and Maintainability',
    'excerpt' => 'Why room layout, filtration access and maintenance planning all matter when designing OT ventilation systems.',
    'image' => 'images/products/air-handling-unit.png',
    'content' => $airflowContent,
  ],
  [
    'slug' => 'cleaning-medical-equipment-workflows',
    'category' => 'Equipment care',
    'title' => 'Planning Cleaning Workflows for Shared Medical Equipment',
    'excerpt' => 'How written procedures, compatible products and clear responsibilities support safer equipment-care routines.',
    'image' => 'images/products/ultrasonic-cleaners.png',
    'content' => $equipmentCareContent,
  ],
];
