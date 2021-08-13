<?php

interface iUser
{
    public function setName($name); // установить имя

    public function getName(); // получить имя

    public function setAge($age); // установить возраст

    public function getAge(); // получить возраст
}

class User implements iUser
{
    private string $name;
    private int $age;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;

    }

    public function getAge($age)
    {
        return $this->age;

    }
}

?>