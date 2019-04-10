<?php
/**
 * Created by IntelliJ IDEA.
 * User: ПК
 * Date: 04.04.2019
 * Time: 10:31
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController  extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//    public   function Parse($p1, $p2, $p3)   //p1-адресс сайта,p2-первый уникальный элемент, p3-второй уникальный элемент
//    {
//        $num1 = strpos($p1, $p2);
//
//        if ($num1 === false) {
//            return 0;
//        }
//
//        $num2 = substr($p1, $num1);
//        return substr($num2, 0, strpos($num2, $p3));
//    }

    public function index()
    {
        $String = file_get_contents("https://www.gismeteo.ua/weather-zaporizhia-5093/");

        $String1 = '<div class="wsection wdata">';
        $String2 = '<div class="section bottom">';
        $strTmp = $String1;
//        $strTmp .= Parse($String, $String1, $String2);
        $num1 = strpos( $String, $String1);
        $num2 = substr( $String, $num1);
        $strTmp .=substr($num2, 0, strpos($num2, $String2));
        return view('weather',compact('strTmp'));
    }
}
