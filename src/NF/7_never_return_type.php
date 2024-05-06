<?php

//function redirect(string $url): never {
//    header('Location: ' . $url);
//    exit();
//    // or throw an exception
//    // throw new Exception("");
//}
//
///// .... code
//redirect("url");
//echo " Hello world ";















function doNothing() : never {
    echo " doing nothing";
}

if (false){
    doNothing();

}
//
//// never is a return type
//function foo(never $a) {}
//class Foo {
//    private never $bar;
//}
//function foo(): never|string {}
//
//// Void VS Never :
////Void allows calling return without an explicit value. i.e. return;
////However, calling return (even without a value) is not allowed at all in a never-declared function.

