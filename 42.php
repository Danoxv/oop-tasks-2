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


class Rectangle implements Figure, Tetragon
{
    private  $a;
    private  $b;


    public function __construct(int $a, int $b, )
    {
        $this->a = $a;
        $this->b = $b;

    }

    public function getSquare(): int
    {
        return $this->a * $this->b;
    }

    public function getPerimeter(): int
    {
        return 2 * ($this->a + $this->b);
    }


    public function getA(): int
    {
        return $this->a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function getC(): int
    {
        return $this->a;
    }

    public function getD()
    {
        return $this->b;
    }
}

class Disk implements Figure, Circle
{
    const PI = 3.14;
    public $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getSquare(): int|float
    {
        return self::PI * $this->r ** 2;
    }

    public function getPerimeter(): int|float
    {
        return 2 * self::PI * $this->r;
    }

    public function getRadius(): int|float
    {
        return $this->r;
    }

    public function getDiameter(): int|float
    {
        return 2 * $this->r;
    }
}

?>