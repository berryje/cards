<?php

function calc_card_total($card_array1){
    $card_value1=["KING"=>10, "QUEEN"=>10, "JACK"=>10,"ACE"=>1, "2"=>2, "3"=>3, "4"=>4, "5"=>5, "6"=>6, "7"=>7, "8"=>8, "9"=>9, "10"=>10 ];
    $card_value2=["KING"=>10, "QUEEN"=>10, "JACK"=>10,"ACE"=>11, "2"=>2, "3"=>3, "4"=>4, "5"=>5, "6"=>6, "7"=>7, "8"=>8, "9"=>9, "10"=>10 ];
    $card_total1 = 0;
    $card_total2 = 0;
    $card_face="";
    foreach($card_array1 as $card){
        $card_face = $card['value'];
        $card_total1 = $card_total1 + $card_value1[$card_face];
        $card_total2 = $card_total2 + $card_value2[$card_face];
    }
    if($card_total1 < 21 && $card_total2 < 21){
        return $card_total2;
    } else if($card_total1 == 21){
        return $card_total1;
    } else if($card_total2 == 21){
        return $card_total2;
    } else if($card_total1 < 21) {
        return $card_total1;
    } else{
        return $card_total1;
    }
 }

 ?>