<?php

use Carbon\Carbon;

if (!function_exists('fmt_rupiah')) {
    function fmt_rupiah($number)
    {
        return 'Rp ' . number_format($number, 0, ',', '.');
    }
}

if (!function_exists('fmt_currency')) {
    function fmt_currency($number)
    {
        return number_format($number, 0, ',', '.');
    }
}
