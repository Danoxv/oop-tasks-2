<?php

//interface iСube
//{
//    public function __construct($a);
//
//    public function getVolume();
//
//    public function getSurface();
//}
//
//class Cube implements iCube
//{
//    private $a;
//
//    public function __construct($a)
//    {
//        $this->a = $a;
//    }
//
//    public function getVolume()
//    {
//        return $this->a ** 3;
//    }
//
//    public function getSurface()
//    {
//        return ($this->a ** 2) * 6;
//    }
//
//}


interface iUser
{

    public function __construct(string $name, int $age);

    public function getName(): string

    public function getAge(): int;

}

class User implements iUser
{

    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {

        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

}

?>