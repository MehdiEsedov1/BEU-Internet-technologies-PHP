<?php

class Animal
{
    public $name;

    protected $type;

    private $age;

    public function __construct($name, $type, $age)
    {
        $this->name = $name;
        $this->type = $type;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    protected function getType()
    {
        return $this->type;
    }

    private function getAge()
    {
        return $this->age;
    }

    public function showDetails()
    {
        echo "Heyvanın adı: " . $this->getName() . "<br>";
        echo "Heyvanın tipi: " . $this->getType() . "<br>";
        echo "Heyvanın yaşı: " . $this->getAge() . "<br>";
    }
}

class Dog extends Animal
{
    public function __construct($name, $age)
    {
        parent::__construct($name, "Dog", $age); // Parent sinifin konstruktorunu çağırır
    }

    public function showDogDetails()
    {
        echo "Itin adı: " . $this->getName() . "<br>";
        echo "Itin tipi: " . $this->getType() . "<br>"; // protected metoddan istifadə
    }
}

$dog = new Dog("Max", 5);

echo $dog->getName();

// Protected metodlardan və private metodlardan xaricdən istifadə etmək olmaz
// echo $dog->getType(); // ERROR: Cannot access protected method Animal::getType() from outside class
// echo $dog->getAge(); // ERROR: Cannot access private method Animal::getAge() from outside class

// Subclass içindən protected metoddan istifadə edirik
$dog->showDogDetails(); // Itin adı: Max, Itin tipi: Dog

// Public metodlardan istifadə edərək məlumatları çap edirik
$dog->showDetails();
// Heyvanın adı: Max
// Heyvanın tipi: Dog
// Heyvanın yaşı: 5
