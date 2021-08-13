<?php

interface Figure
{
    public function getSquare();

    public function getPerimeter();

}

interface Figure3d
{
    public function getVolume();

    public function getSurfaceSquare();
}

class Cube implements Figure3d
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getVolume(): int
    {
        return $this->a ** 3;
    }

    public function getSurfaceSquare(): float|int
    {
        return ($this->a ** 2) * 6;
    }
}

class Quadrate implements Figure
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getSquare(): float|int
    {
        return $this->a * $this->a;
    }

    public function getPerimeter(): float|int
    {
        return 4 * $this->a;
    }
}

class Rectangle implements Figure
{
    private int $a;
    private int $b;


    public function __construct(int $a, int $b)
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
}

$Quadrate = new Quadrate(5);
$Rectangle = new Rectangle(3, 4);
$Cube = new Cube(4);
$arr = [$Quadrate, $Rectangle, $Cube];
foreach ($arr as $figure) {
    if ($figure instanceof Figure) {
         echo $figure->getSquare().'<br/>';
    }elseif ($figure instanceof Figure3d ){
        echo $figure->getSurfaceSquare();
    }
}

?>