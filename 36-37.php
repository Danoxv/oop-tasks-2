<?php

interface Figure
{
    public function getSquare();

    public function getPerimeter();
}

class Disk implements Figure
{
    const PI = 3.14;
    /**
     * @var int
     */
    public  int $r;

    /**
     * Disk constructor.
     * @param int $R
     */
    public function __construct( int $r)
    {
        $this->r = $r;

    }

    /**
     * @return int|float
     */
    public function getSquare(): int|float
    {
        return self::PI * $this->r * $this->r;

    }

    /**
     * @return int|float
     */
    public function getPerimeter(): int|float
    {
        return 2 * (self::PI) * $this->r;

    }
}

class FiguresCollection
{
    /**
     * @var array
     */
    public  array $figures = [];

    /**
     * @param figure $figure
     */
    public function addFigure(figure $figure)
    {
        $this->figures[] = $figure;
    }

    /**
     * @return int|float
     */
    public function getTotalSquare(): int|float
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getSquare();
        }
        return $sum;
    }

    /**
     * @return int|float
     */
    public function getTotalPerimeter(): int|float
    {
        $sum = 0;

        foreach ($this->figures as $figur) {
            $sum += $figur->getPerimeter();
        }

        return $sum;

    }

}

//$figuresCollection = new FiguresCollection;
//
//$figuresCollection->addFigure(new Disk(3));
//$figuresCollection->addFigure(new Disk(6));
//echo $figuresCollection->getTotalSquare() . '<br/>';
//echo $figuresCollection->getTotalPerimeter();
//$disk = new Disk(6);
//echo $disk->getSquare() . '<br/>';
////echo $disk->getPerimeter();
?>