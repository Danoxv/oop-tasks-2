<?php

interface Tetragon
{
    public function getA();

    public function getB();

    public function getC();

    public function getD();
}

interface Figure
{
    public function getSquare();

    public function getPerimeter();
}

interface  Circle
{
    public function getRadius();

    public function getDiameter();
}


//class Rectangle implements Figure, Tetragon
//{
//    private int $a;
//    private int $b;
//    private int $c;
//    private int $d;
//
//    public function __construct(int $a, int $b, int $c, int $d)
//    {
//        $this->a = $a;
//        $this->b = $b;
//        $this->c = $c;
//        $this->d = $d;
//    }
//
//    public function getSquare(): int
//    {
//        return $this->a * $this->b;
//    }
//
//    public function getPerimeter(): int
//    {
//        return 2 * ($this->a + $this->b);
//    }
//
//
//    public function getA()
//    {
//        return $this->a;
//    }
//
//    public function getB()
//    {
//        return $this->b;
//    }
//
//    public function getC()
//    {
//        return $this->c;
//    }
//
//    public function getD()
//    {
//        return $this->d;
//    }
//}

class Disk implements Figure, Circle
{
 private int $square = 100;
 private int $perimeter = 80;
 private int $radius = 50;
 private int $diameter = 25;


    public function getSquare(): int|float
    {
       return $this->square;
    }

    public function getPerimeter(): int|float
    {
        return $this->perimeter;
    }

    public function getRadius(): int|float
    {
        return $this->radius;
    }

    public function getDiameter(): int|float
    {
        return $this->diameter;
    }
}

?>