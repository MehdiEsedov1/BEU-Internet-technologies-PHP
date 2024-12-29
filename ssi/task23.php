<?php

// Superclass (üst sinif)
class Animal
{
    // Public dəyişən - Hər yerdən daxil olmaq mümkündür
    public $name;

    // Protected dəyişən - Yalnız bu sinifdən və ondan irəliləyən siniflərdən (subclass) daxil olmaq mümkündür
    protected $type;

    // Private dəyişən - Yalnız bu sinifdən daxil olmaq mümkündür
    private $age;

    // Konstruktor
    public function __construct($name, $type, $age)
    {
        $this->name = $name;
        $this->type = $type;
        $this->age = $age;
    }

    // Public metod - Hər yerdən istifadə oluna bilər
    public function getName()
    {
        return $this->name;
    }

    // Protected metod - Bu metod yalnız bu sinifdən və ondan irəliləyən siniflərdən istifadə oluna bilər
    protected function getType()
    {
        return $this->type;
    }

    // Private metod - Bu metod yalnız bu sinif daxilində istifadə oluna bilər
    private function getAge()
    {
        return $this->age;
    }

    // Public metod, private metodu çağırır
    public function showDetails()
    {
        echo "Heyvanın adı: " . $this->getName() . "<br>";
        echo "Heyvanın tipi: " . $this->getType() . "<br>";
        echo "Heyvanın yaşı: " . $this->getAge() . "<br>";
    }
}

// Subclass (alt sinif)
class Dog extends Animal
{
    // Constructor
    public function __construct($name, $age)
    {
        parent::__construct($name, "Dog", $age); // Parent sinifin konstruktorunu çağırır
    }

    // Protected metoddan istifadə
    public function showDogDetails()
    {
        echo "Itin adı: " . $this->getName() . "<br>";
        echo "Itin tipi: " . $this->getType() . "<br>"; // protected metoddan istifadə
    }
}

// Obyekt yaradılır
$dog = new Dog("Max", 5);

// Public metoddan istifadə edirik
echo $dog->getName(); // Max

// Protected metodlardan və private metodlardan xaricdən istifadə etmək olmaz
// echo $dog->getType(); // HATA: Cannot access protected method Animal::getType() from outside class
// echo $dog->getAge(); // HATA: Cannot access private method Animal::getAge() from outside class

// Subclass içindən protected metoddan istifadə edirik
$dog->showDogDetails(); // Itin adı: Max, Itin tipi: Dog

// Public metodlardan istifadə edərək məlumatları çap edirik
$dog->showDetails();
// Heyvanın adı: Max
// Heyvanın tipi: Dog
// Heyvanın yaşı: 5
