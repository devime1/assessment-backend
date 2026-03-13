<?php

namespace Database\Seeders;

use App\Models\Assessment;
use Illuminate\Database\Seeder;

class AssessmentSeeder extends Seeder
{
    public function run(): void
    {
        $assessments = [
            [
                'title' => 'Warehouse Operative Risk Assessment',
                'status' => 'Open',
                'review_date' => now()->addDays(14)->toDateString(),
                'notes' => 'Assessment for new warehouse operatives handling heavy goods and operating forklifts.',
                'hazards' => [
                    [
                        'title' => 'Manual handling of heavy loads',
                        'risk_level' => 'High',
                        'description' => 'Operatives frequently lift boxes exceeding 25kg without mechanical aids.',
                        'likelihood' => 'Likely',
                        'severity' => 'Major',
                    ],
                    [
                        'title' => 'Forklift and pedestrian interaction',
                        'risk_level' => 'High',
                        'description' => 'Shared walkways between forklifts and foot traffic in loading bay.',
                        'likelihood' => 'Possible',
                        'severity' => 'Catastrophic',
                    ],
                    [
                        'title' => 'Slippery surfaces near loading dock',
                        'risk_level' => 'Medium',
                        'description' => 'Water ingress during rain causes slippery conditions at entry points.',
                        'likelihood' => 'Likely',
                        'severity' => 'Moderate',
                    ],
                    [
                        'title' => 'Inadequate lighting in storage aisles',
                        'risk_level' => 'Medium',
                        'description' => 'Several overhead lights are faulty in aisle 4 and aisle 7.',
                        'likelihood' => 'Likely',
                        'severity' => 'Minor',
                    ],
                ],
            ],
            [
                'title' => 'Office Administrator Workstation Assessment',
                'status' => 'In Review',
                'review_date' => now()->addDays(7)->toDateString(),
                'notes' => 'DSE assessment for administrative staff working 8+ hours daily on computers.',
                'hazards' => [
                    [
                        'title' => 'Poor posture due to non-adjustable seating',
                        'risk_level' => 'Medium',
                        'description' => 'Several workstations have fixed chairs with no lumbar support, contributing to reported back pain.',
                        'likelihood' => 'Likely',
                        'severity' => 'Moderate',
                    ],
                    [
                        'title' => 'Monitor glare causing eye strain',
                        'risk_level' => 'Low',
                        'description' => 'Screens positioned facing windows result in excessive glare, increasing eye fatigue.',
                        'likelihood' => 'Almost Certain',
                        'severity' => 'Minor',
                    ],
                    [
                        'title' => 'Trailing cables across walkways',
                        'risk_level' => 'Medium',
                        'description' => 'Power and monitor cables run across open floor areas creating a trip hazard.',
                        'likelihood' => 'Possible',
                        'severity' => 'Moderate',
                    ],
                ],
            ],
            [
                'title' => 'Construction Site Induction Assessment',
                'status' => 'Open',
                'review_date' => now()->addDays(5)->toDateString(),
                'notes' => 'Pre-employment site safety assessment for general labourers and contractors.',
                'hazards' => [
                    [
                        'title' => 'Working at height without fall protection',
                        'risk_level' => 'High',
                        'description' => 'Workers observed on scaffolding above 2m without harnesses or edge protection.',
                        'likelihood' => 'Possible',
                        'severity' => 'Catastrophic',
                    ],
                    [
                        'title' => 'Unsecured scaffolding frames',
                        'risk_level' => 'High',
                        'description' => 'Scaffolding on the north face of the building has not been inspected or signed off this week.',
                        'likelihood' => 'Unlikely',
                        'severity' => 'Catastrophic',
                    ],
                    [
                        'title' => 'Exposed live electrical wiring',
                        'risk_level' => 'High',
                        'description' => 'Temporary electrical supply cables on level 2 are not properly insulated or secured.',
                        'likelihood' => 'Possible',
                        'severity' => 'Major',
                    ],
                    [
                        'title' => 'Inadequate PPE compliance',
                        'risk_level' => 'Medium',
                        'description' => 'Multiple workers entering site without hard hats, hi-vis vests, or steel-toe boots.',
                        'likelihood' => 'Likely',
                        'severity' => 'Major',
                    ],
                    [
                        'title' => 'Dust inhalation from cutting operations',
                        'risk_level' => 'Medium',
                        'description' => 'Concrete cutting taking place without wet suppression or respiratory protection.',
                        'likelihood' => 'Almost Certain',
                        'severity' => 'Moderate',
                    ],
                ],
            ],
            [
                'title' => 'Kitchen Staff Health & Safety Assessment',
                'status' => 'Closed',
                'review_date' => now()->subDays(3)->toDateString(),
                'notes' => 'Completed assessment for catering staff working in a commercial kitchen environment.',
                'hazards' => [
                    [
                        'title' => 'Burns from hot surfaces and open flames',
                        'risk_level' => 'High',
                        'description' => 'Frequent contact with hot pans, ovens, and open burners during peak service hours.',
                        'likelihood' => 'Almost Certain',
                        'severity' => 'Moderate',
                    ],
                    [
                        'title' => 'Slip hazard from wet kitchen floors',
                        'risk_level' => 'High',
                        'description' => 'Grease and water accumulation on kitchen floors during service, especially near fryers.',
                        'likelihood' => 'Likely',
                        'severity' => 'Major',
                    ],
                    [
                        'title' => 'Improper knife storage and handling',
                        'risk_level' => 'Medium',
                        'description' => 'Knives left on counter surfaces rather than stored in designated knife blocks or sheaths.',
                        'likelihood' => 'Possible',
                        'severity' => 'Moderate',
                    ],
                ],
            ],
            [
                'title' => 'Delivery Driver Vehicle Safety Assessment',
                'status' => 'In Review',
                'review_date' => now()->addDays(10)->toDateString(),
                'notes' => 'Assessment covering road safety, lone working, and manual handling for delivery drivers.',
                'hazards' => [
                    [
                        'title' => 'Driver fatigue on long routes',
                        'risk_level' => 'High',
                        'description' => 'Drivers completing 10+ hour shifts with insufficient break intervals, increasing collision risk.',
                        'likelihood' => 'Likely',
                        'severity' => 'Catastrophic',
                    ],
                    [
                        'title' => 'Lone working in isolated locations',
                        'risk_level' => 'Medium',
                        'description' => 'Drivers making deliveries to remote or industrial areas without check-in procedures.',
                        'likelihood' => 'Possible',
                        'severity' => 'Major',
                    ],
                    [
                        'title' => 'Manual handling of heavy parcels',
                        'risk_level' => 'Medium',
                        'description' => 'Drivers regularly unloading packages exceeding safe lifting limits without aids.',
                        'likelihood' => 'Almost Certain',
                        'severity' => 'Moderate',
                    ],
                    [
                        'title' => 'Vehicle not roadworthy',
                        'risk_level' => 'High',
                        'description' => 'Pre-inspection checks not consistently completed, with tyre and brake issues going unreported.',
                        'likelihood' => 'Unlikely',
                        'severity' => 'Catastrophic',
                    ],
                ],
            ],
        ];

        foreach ($assessments as $data) {
            $assessment = Assessment::create([
                'title' => $data['title'],
                'status' => $data['status'],
                'review_date' => $data['review_date'],
                'notes' => $data['notes'],
            ]);

            $assessment->hazards()->createMany($data['hazards']);
        }
    }
}
