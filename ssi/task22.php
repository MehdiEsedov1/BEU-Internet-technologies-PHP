<?php

// 1. Static (Statik) - Klassın obyektinə bağlı olmadan, sinif səviyyəsində istifadə olunur.
class MyClass
{
    // Statik dəyişən
    public static $count = 0;

    // Statik metod
    public static function increment()
    {
        self::$count++; // Statik dəyişəni artırır
        echo "Statik sayğac: " . self::$count . "<br>";
    }

    // Statik metodun çağırılması
    public static function showCount()
    {
        echo "Sayğac: " . self::$count . "<br>";
    }
}

// Static metodları sinif adı ilə birbaşa çağırırıq (obyekt yaratmağa ehtiyac yoxdur)
MyClass::increment(); // Statik sayğac: 1
MyClass::increment(); // Statik sayğac: 2
MyClass::showCount(); // Sayğac: 2

// 2. Parent - Əvvəlki sinifin (üst sinifin) metodlarını və dəyişənlərini çağırmağa imkan verir.
// Superclass (üst sinif)
class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function speak()
    {
        return "Mən bir heyvanam.";
    }
}

// Subclass (alt sinif)
class Dog extends Animal
{
    public $breed;

    public function __construct($name, $breed)
    {
        // Parent konstruktorunu çağırır
        parent::__construct($name);
        $this->breed = $breed;
    }

    // Parent sinifinin speak() metodunu dəyişdiririk
    public function speak()
    {
        return parent::speak() . " Mən itəm və mənim cinsim " . $this->breed . "dir.";
    }
}

// Obyekt yarat
$dog = new Dog("Max", "Bulldog");
echo $dog->speak(); // Mən bir heyvanam. Mən itəm və mənim cinsim Bulldogdur.

// 3. Self - Mövcud sinifin özünü göstərir və yalnız həmin sinifin daxilində istifadə oluna bilər.
// Aynı sinifdə metod və dəyişənlərə `self::` ilə müraciət edilir.

class MyClassSelf
{
    // Dəyişən
    public $name = "MyClassSelf";

    // Metod
    public function showName()
    {
        echo "Sinif adı: " . self::$name . "<br>";
    }
}

// Obyekt yaradılır
$object = new MyClassSelf();
$object->showName(); // Sinif adı: MyClassSelf
