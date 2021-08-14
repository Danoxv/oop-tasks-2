<?php

interface iProgrammer
{
    public function __construct($name, $salary, $langs);

    public function getName();

    public function getSalary();

    public function getLangs();

    public function addLang($lang);
}

class Employee
{
    protected $name;
    protected $salary;

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
    private $arr = [];

    public function __construct($name, $salary, $langs)
    {
        foreach ($langs as $lang) {
            $this->arr[] = $lang;
        }

        parent::__construct($name, $salary);

    }

    public function getLangs(): array
    {
        return $this->arr;
    }

    public function addLang($lang)
    {
        $this->arr[] = $lang;
    }
}

$programmer = new Programmer('Denis', 500, ['PHP', 'JS']);
$programmer->addLang('C#');
var_dump($programmer->getLangs());
?>