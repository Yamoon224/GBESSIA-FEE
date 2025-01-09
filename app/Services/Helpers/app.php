<?php


    if (!function_exists("uiavatar")) {
        function uiavatar($name = '') {
            return "https://ui-avatars.com/api/?name=".str_replace(' ', '+', auth()->check() ? auth()->user()->name : $name);
        }
    }

    /**
     * @param $money|string : The amount to format
     * @param $sep|string : The separator who need to replace
     * @param $currency|string : The currency of the money
     * @return string : return a string 
     */
    if (!function_exists('moneyFormat')) {
        function moneyFormat(string $amount, string $sep = " ", string $currency = "XOF") {
            $number = number_format($amount, 0, ',', $sep);
            return $number. " " .(app()->getLocale() == 'en' ? $currency : 'Fcfa');
        }   
    }