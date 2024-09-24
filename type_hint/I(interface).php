<?php
interface I {
    
    public function f();
}
class C implements I {
    public function f(){
    
    }
    }
class A extends C{
    public function __construct(){
        
    }
public function a1(){
    return "This is function b1 from class
A.";
}
}
class B extends C{
    public function __construct(){
    }
    public function b1(){
    return "This is function b1 from class
B.";
}
}
