<?php

interface iUser
{
    public function getName();

    public function setName(string $name);

    public function getAge();

    public function setAge(int $age);

}

interface  iEmployee extends iUser
{
    public function getSalary();

    public function setSalary(int $salary);


}

class Employee implements iEmployee
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
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

    public function getSalary(): mixed
    {
        return $this->salary;
    }

    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }
}

?>