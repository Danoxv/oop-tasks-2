<?php
/**
 * Задача 35.1
 * Самостоятельно, не подсматривая в мой код, реализуйте такой же абстрактный класс User, а также классы Employee и Student, наследующие от него.
 *
 * Задача 35.2
 * Добавьте в ваш класс User такой же абстрактный метод increaseRevenue. Напишите реализацию этого метода в классах Employee и Student.
 *
 * Задача 35.3
 * Добавьте также в ваш класс User абстрактный метод decreaseRevenue (уменьшить зарплату). Напишите реализацию этого метода в классах Employee и Student.
 *
 */
//abstract class User
//{
//
//    /**
//     * @var string
//     */
//    private string $name;
//
//    public function getName(): string
//    {
//        return $this->name;
//    }
//
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    abstract public function increaseRevenue($value);
//
//    abstract public function decreaseRevenue($param);
//}
//
//class Employee extends User
//{
//
//    private int $salary;
//
//    public function getSalary(): int
//    {
//        return $this->salary;
//    }
//
//    public function setSalary($salary)
//    {
//        $this->salary = $salary;
//    }
//
//    // Напишем реализацию метода:
//    public function increaseRevenue($value)
//    {
//        $this->salary = $this->salary + $value;
//    }
//
//    public function decreaseRevenue($value)
//    {
//        $this->salary = $this->salary - $value;
//    }
//
//}
//
//class Student extends User
//{
//
//    private $scholarship; // стипендия
//
//    public function getScholarship(): int
//    {
//        return $this->scholarship;
//    }
//
//    public function setScholarship($scholarship)
//    {
//        $this->scholarship = $scholarship;
//    }
//
//    // Метод увеличивает стипендию:
//    public function increaseRevenue($value)
//    {
//        $this->scholarship = $this->scholarship + $value;
//    }
//
//    public function decreaseRevenue($value)
//    {
//        $this->scholarship = $this->scholarship - $value;
//    }
//
//}


/**
 *Задача 35.4
 *
 * Сделайте аналогичный класс Rectangle (прямоугольник), у которого будет два приватных свойства: $a для ширины и $b для длины.
 *
 * Данный класс также должен наследовать от класса Figure и реализовывать его методы.
 */
abstract class Figure
{
    abstract public function getSquare();

    abstract public function getPerimeter();

    public function getSquarePerimeterSum()
    {
        return $this->getSquare() + $this->getPerimeter();
    }

}

class Rectangle extends Figure
{
    private int  $a;
    private int  $b;


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

$Rectangle = new Rectangle(4, 4);
echo $Rectangle->getSquare();
echo $Rectangle->getPerimeter();

echo $Rectangle->getSquarePerimeterSum();
?>