<?php

interface iСube
{
    public function __construct($a);

    //методы для получения объема куба и площади поверхности.
    public function getVolume();

    public function getSurface();
    //Площадь поверхности куба равна сумме площадей всех его шести граней .
}

class Cube implements iCube
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getVolume()
    {
        return $this->a ** 3;
    }

    public function getSurface()
    {
        return ($this->a ** 2) * 2;
    }

}

?>