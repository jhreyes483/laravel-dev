<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{


    public function __construct(){
        $this->gen = Controller::arrGen();
        $this->doc = Controller::arrDoc();
        $this->est = Controller::arrEst();
    }



    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    static function  arrDoc(){
        return  ['Cedula', 'Tarjeta de identidad', 'Cedula extranjeria'];
    }

    static function  arrGen(){
        return  ['Masculino', 'Femenino'];
    }

    static function  arrEst(){
        return  ['Inactivo', 'Activo'];
    }

    
    public static function ver($dato, $sale = 0, $bg = 0, $tit = '', $float = false, $email = ''){
        switch ($bg) {
            case 1: $bgColor = 'b0ffff'; break;
            case 2: $bgColor = 'd0ffb9'; break;
            default: $bgColor = 'ffcfcd'; break;
        }
        echo '<div style="background-color:#' . $bgColor . '; border:1px solid maroon;  margin:auto 5px; text-align:left;' . ($float ? ' float:left;' : '') . ' padding: 0 7px 7px 7px; border-radius:7px; margin-top:10px; ">';
        echo '<h2 style="padding: 5px 5px 5px 10px;	margin: 0 -7px; color: #FFF; background-color: #FF6F00; border-radius: 6px 6px 0 0; display:flex"><img src="/public/layout1/ico/debugging.png">&nbsp;Debugging for:&nbsp;&nbsp;<span style="color:black">' . $tit . '</span></h2>';
        if (is_array($dato) || is_object($dato)) {
            echo '<pre>';
            print_r($dato);
            echo '</pre>';
        } else {
            if (isset($dato)) {
                echo '<b>&raquo;&raquo;&raquo; DEBUG &laquo;&laquo;&laquo;</b><br><br>' . nl2br($dato);
            } else {
                echo 'LA VARIABLE NO EXISTE';
            }
        }
        echo '</div>';
        if ($sale == 1) die();
        if ($email != '') mail('soporte@itt.com.co', 'SQL', $dato, '');
    }
    


}
