<?php

function dump($arg){
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
}

function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

function postDate($day){
    
    switch (date("m", strtotime($day)) ) {
        case '01':
            $mon = 'STY';
            break;
        case '02':
            $mon = 'LUT';
            break;
        case '03':
            $mon = 'MAR';
            break;
        case '04':
            $mon = 'KWI';
            break;
        case '05':
            $mon = 'MAJ';
            break;
        case '06':
            $mon = 'CZE';
            break;
        case '07':
            $mon = 'LIP';
            break;
        case '08':
            $mon = 'SIE';
            break;
        case '09':
            $mon = 'WRZ';
            break;
        case '10':
            $mon = 'PAŹ';
            break;
        case '11':
            $mon = 'LIS';
            break;
        case '12':
            $mon = 'GRU';
            break;
    }
    return date("d", strtotime($day)) . ' ' . $mon . ' ' . substr(date("Y", strtotime($day)), 2, 2);
}