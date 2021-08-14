<?php

interface iSphere
{
    const PI = 3.14; // число ПИ как константа

    // Конструктор шара:
    public function __construct($radius);

    // Метод для нахождения объема шара:
    public function getVolume();

    // Метод для нахождения площади поверхности шара:
    public function getSquare();
}

class Sphere implements iSphere
{

    private  int| float $r;


    public function __construct($radius)
    {
        $this->r = $radius;
    }

    public function getVolume(): float|int
    {
        return 4 / 3 * self::PI * $this->r ** 3;
    }

    public function getSquare(): float|int
    {
        return 4 * self::PI * $this->r ** 2;
    }
}

$Sphere = new Sphere(2);
echo $Sphere->getVolume();

?>