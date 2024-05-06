<?php

function sum ( int $a, int $b, int $c )
{
    return $a+$b+$c;
}

var_dump(sum(...[1, 2], c: 3));