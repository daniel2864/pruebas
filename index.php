<?php
/**
 * Created by PhpStorm.
 * User: Daniel2864
 * Date: 11/10/2015
 * Time: 02:47 PM
 */
function suma($a,$b){
    return $a + $b;
}


echo suma(5,8);
class conexion{
    function hola(){
        echo 'hola';
    }
}
$obj = new conexion();
$obj->hola();