<?php
$min = $_GET['min'];
$max = $_GET['max'];

if ($min == null || $max == null){
    echo 'Missing parameter';
}

echo rand($min, $max);
