<?php
include './c.php';
class A extends C{
    public function __construct(){
        
    }
public function a1(){
    return "This is function b1 from class
A.";
}
}
$a= new A();
// echo $a->a1();