<?php
declare(strict_types=1);

include './I(interface).php';
class demo
{

    // đánh giá true/false A

    public function typeAreturnA(): A
    {
    echo __FUNCTION__ . "<br>";
    return new A();
    }
    public function typeBreturnA(): B
    {
        echo __FUNCTION__ . "</br>";
        return new A();
    }
    public function typeCreturnA(): C
    {
        echo __FUNCTION__ . "</br>";
        return new A();
    }
    public function typeIreturnA(): I
    {
        echo __FUNCTION__ . "</br>";
        return new A();
    }
    public function typeNullreturnA(): null
    {
        echo __FUNCTION__ . "</br>";
        return new A();
    }


    // đánh giá true/false B
    public function typeAreturnB(): A
    {
        echo __FUNCTION__ . "</br>";
        return new B();
    }
    public function typeBreturnB(): B
    {
        echo __FUNCTION__ . "</br>";
        return new B();
    }
    public function typeCreturnB(): C
    {
        echo __FUNCTION__ . "</br>";
        return new B();
    }
    public function typeIreturnB(): I
    {
        echo __FUNCTION__ . "</br>";
        return new B();
    }
    public function typeNullreturnB(): null
    {
        echo __FUNCTION__ . "</br>";
        return new B();
    }

    // đánh giá true/false C

    public function typeAreturnC(): A
    {
        echo __FUNCTION__ . "</br>";
        return new C();
    }
    public function typeBreturnC(): B
    {
        echo __FUNCTION__ . "</br>";
        return new C();
    }
    public function typeCreturnC(): C
    {
        echo __FUNCTION__ . "</br>";
        return new C();
    }
    public function typeIreturnC(): I
    {
        echo __FUNCTION__ . "</br>";
        return new C();
    }
    public function typeNullreturnC(): null
    {
        echo __FUNCTION__ . "</br>";
        return new C();
    }

    // đánh giá true/false I

    public function typeAreturnI(): A
    {
        echo __FUNCTION__ . "</br>";
        return new I();
    }
    public function typeBreturnI(): B
    {
        echo __FUNCTION__ . "</br>";
        return new I();
    }
    public function typeCreturnI(): C
    {
        echo __FUNCTION__ . "</br>";
        return new I();
    }
    public function typeIreturnI(): I
    {
        echo __FUNCTION__ . "</br>";
        return new I();
    }
    
    public function typeNullreturnI(): null
    {
        echo __FUNCTION__ . "</br>";
        return new I();
    }
    public function typeNullreturnNull(): null
    {
        echo __FUNCTION__ . "</br>";
        return null;
    }


}
$demo1 = new demo();
$demo2 = new demo();
$demo3 = new demo();
$demo4 = new demo();
$demo5 = new demo();
$demo6 = new demo();
$demo7 = new demo();
$demo8 = new demo();
$demo9 = new demo();
$demo10 = new demo();
$demo11 = new demo();
$demo12 = new demo();
$demo13 = new demo();
$demo14 = new demo();
$demo15 = new demo();
$demo16 = new demo();
$demo17 = new demo();
$demo18 = new demo();
$demo19 = new demo();
$demo20 = new demo();
$demo21 = new demo();
$demo22 = new demo();
$demo23 = new demo();
$demo24 = new demo();
$demo25 = new demo();
// đánh giá true/false I
$demo1->typeAreturnA();
// $demo2->typeBreturnA();
// $demo3->typeCreturnA();
// $demo4->typeIreturnA();
// $demo5->typeNullreturnA();

// $demo6->typeAreturnB();
// $demo7->typeBreturnB();
// $demo8->typeCreturnB();
// $demo9->typeIreturnB();
// $demo10->typeNullreturnB();

// $demo11->typeAreturnC();
// $demo12->typeBreturnC();
// $demo13->typeCreturnC();
// $demo14->typeIreturnC();
// $demo15->typeNullreturnC();

// $demo16->typeAreturnI();
// $demo17->typeBreturnI();
// $demo18->typeCreturnI();
// $demo19->typeIreturnI();
// $demo20->typeNullreturnI();

// $demo21->typeNullreturnA();
// $demo22->typeNullreturnB();
// $demo23->typeNullreturnC();
// $demo24->typeNullreturnI();
// $demo25->typeNullreturnNull();

