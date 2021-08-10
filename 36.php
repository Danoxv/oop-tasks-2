<?php

interface figure
{
    public function getSquare();

    public function getPerimeter();
}

class Disk implements figure
{
    const PI = 3.14;
    public $R;

    public function __construct($R)
    {
        $this->R = $R;

    }

    public function getSquare()
    {
        return self::PI * $this->R * $this->R;

    }

    public function getPerimeter()
    {
        return 2 * (self::PI) * $this->R;

    }
}

//$disk = new Disk(3);
//echo $disk->getSquare() . '<br/>';
//echo $disk->getPerimeter();
?>