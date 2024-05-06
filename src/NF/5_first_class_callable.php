<?php

$fn = Closure::fromCallable('strlen');
$fn = strlen(...);
var_dump($fn('hello world'));

$fn = Closure::fromCallable([$this, 'method']);
$fn = $this->method(...);

$fn = Closure::fromCallable([Foo::class, 'method']);
$fn = Foo::method(...);


