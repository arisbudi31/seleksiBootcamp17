<?php

$biodata = 
    [
        'name' => 'Aris Budiyanto', 
        'age' => 23, 
        'address' => 'Karangsong', 
        'Hobbies' => ['coding', 'basket', 'eat'], 
        'is_married' => False, 
        'list_school' => 
        [
            [
                'name'     => 'SMAN 1 Cisarua',
                'year_in'  => 2012,
                'year_out' => 2015,
                'major'    => 'IPA'
            ],

            [
                'name'     => 'Universitas Jenderal Soedirman',
                'year_in'  => 2015,
                'year_out' => 2018,
                'major'    => 'Electrical Engineering'
            ]
        ],
         'skill' => 
        [
            [
                'skill_name' => 'HTML',
                'level'      => 'expert'
            ],

            [
                'skill_name' => 'javascript',
                'level'      => 'advanced'
            ],

            [
                'skill_name' => 'Node js',
                'level'      => 'beginner'
            ]
        ],

        'interest_in_coding' => TRUE
    ];


biodata('Ari', 23);

function biodata($name, $age){
    global $biodata;
    if($biodata['name']==$name && $biodata['age']==$age){
        $bio_JSON = json_encode($biodata);
        echo $bio_JSON;
    }
    else{
        echo "Data tidak ditemukan";
    }
}

?>