<?php
$ca = $_GET['ca'];

if($ca === null){
    echo 'missing parameter';
}else{
    echo (intval($ca) * 60) / 100;
}