<?php

if (!function_exists('convertToArabicNumbers')) {
    function convertToArabicNumbers($number)
    {
        $arabicNumbers = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        $englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        // استبدال الأرقام الإنجليزية بالأرقام العربية
        return str_replace($englishNumbers, $arabicNumbers, $number);
    }
}