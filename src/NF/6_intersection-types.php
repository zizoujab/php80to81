<?php
// Intersection types cannot be used together with union types



function count_and_iterate(Iterator&\Countable $value): void
{
    foreach($value as $val) {}
    count($value);
}

