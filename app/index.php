<?php
     $data = [
        ["Андрей", 9],
        ["Василий",11],
        ["Роман",7],
        ["Андрей", 2],
        ["Роман", 1],
        ["Андрей", 6],
        ["Иванов Иван", 3],
        ["Иван", 5],
        ["Роман", 11],
        ["Василий", 6],
    ];

    $sumNumByName = function($data) {
        $new_date = array();
        foreach ($data as $value){
            $new_name = '';
            $sum = 0;
            foreach ($data as $value2){
                if($value[0] === $value2[0]){
                    $new_name .= $value2[1].',';
                    $sum +=$value2[1];
                }
            }
            $new_date[] = $value[0].': '.substr_replace($new_name,";",-1).' '.$sum;
        }
        return array_unique($new_date);
    };

    foreach ($sumNumByName($data) as $value){
        echo $value;
        echo '<br>';
    }
?>