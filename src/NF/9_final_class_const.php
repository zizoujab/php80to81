<?php

//interface I
//{
//    public const X = "i";
//}
//
//class C implements I
//{
//    public const X = "bar";
//}

// Fatal error: Cannot inherit previously-inherited or override constant X from interface I
//This leads to a weird inconsistency. By introducing an intermediate class, overriding still becomes possible:

//interface I
//{
//    public const X = "i";
//}
//
//class C implements I
//{
//}
//
//class D extends C
//{
//    public const X = "d";
//}
//
//var_dump(D::X);

//The final modifier can be added to class constants. Doing so prevents overriding of a constant:

//class Foo
//{
//    final public const X = "foo";
//}
//
//class Bar extends Foo
//{
//    public const X = "bar";
//}


interface I
{
    public const X = "i";
    final public const Y = "i";
}

class C implements I
{
    public const X = "c";
    public const Y = "c";
}

var_dump(C::X);

