<?php
/**
 * Created by PhpStorm.
 * User: wanmin
 * Date: 17/1/2
 * Time: 下午8:08
 */



function __autoload($class)
{
    $arr = explode("\\",$class);
    $path = "";
    foreach($arr as $value)
    {
        $path .= $value."/";
    }
    $file = rtrim($path,"/");
    $absfile = dirname(__DIR__)."/".$file.".php";
    require_once($absfile);
}


$instance = new \Demo\User();
$instance->u1();

$instance->u2();

$instance->u3();

$instance->t5();
//$instance->u4();