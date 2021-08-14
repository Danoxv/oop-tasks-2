<?php

interface iProgrammer
{
    public function __construct($name, $salary);

    public function getName();

    public function getSalary();

    public function getLangs();

    public function addLang($lang);
}

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class Programmer extends Employee implements iProgrammer
{
    private $lang;
    private array $arr = [];

    public function getLangs()
    {
        return $this->lang;
    }

    public function addLang($lang)
    {
        $this->arr = $lang;
    }
}

?>