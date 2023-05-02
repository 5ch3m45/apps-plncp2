<?php

if(! function_exists('local_number')) {
    function local_number($number){
        return number_format($number,0,',','.');
    }
}

if(! function_exists('monthName')) {
    function monthName($month){
        $months = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];
        return $months[$month];
    }
}

if(! function_exists('monthCode')) {
    function monthCode($month){
        $months = [
            1 => 'jan',
            2 => 'feb',
            3 => 'mar',
            4 => 'apr',
            5 => 'mei',
            6 => 'jun',
            7 => 'jul',
            8 => 'aug',
            9 => 'sep',
            10 => 'okt',
            11 => 'nov',
            12 => 'des'
        ];
        return $months[$month];
    }
}