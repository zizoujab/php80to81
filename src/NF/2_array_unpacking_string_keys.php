<?php


$arr1 = [1, 'a' => 'b'];
$arr2 = [...$arr1, 'c' => 'd'];

var_dump($arr2);
