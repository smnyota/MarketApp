<?php
// echo "
//         <div style='font-size:12px; color:#999;'>Employee #1</div>
//         <div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>Cam</div>

//         <div style='font-size:12px; color:#999;'>Employee #2</div>
//         <div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>Eva</div>

//         <div style='font-size:12px; color:#999;'>Employee #3</div>
//         <div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>Reno</div>
//     ";


    $employees = [
        'Cam', 
        'Mitchell', 
        'Reno'
    ];

    $count = 1;

    // foreach($employees as $individualEmployee) {
    //     echo "
    //     <div style='font-size:12px; color:#999;'>Employee #".$count."</div>
    //     <div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>".$individualEmployee."</div>
    //     ";
    //     $count++;
    // }
    

    //Arrays within arrays

    $employees = [
        [
            'Name' => 'Cam',
            'PhoneNumber' => '123-456-7890'
        ] ,
        [
            'Name' => 'Eva',
            'PhoneNumber' => '555-555-5555'
        ],
        [
            'Name' => 'Reno',
            'PhoneNumber' => '101-001-1001'
        ],
        [
            'Name' => 'Grace',
            'PhoneNumber' => '111-123-4560'
        ]
        ];

    $count2 = 1;



    foreach($employees as $individualEmployee2) {
        echo "
        <div style='font-size:12px; color:#999;'>Employee #".$count2."</div>
        <div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>".$individualEmployee2['Name']."</div>
        <div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>".$individualEmployee2['PhoneNumber']."</div>
         ";
        $count2++;
    }

