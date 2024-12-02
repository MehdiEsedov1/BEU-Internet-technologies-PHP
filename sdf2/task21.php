<?php
class User
{
    private $name;
    private $surname;

    // Konstruktor - sinif obyektinin yaradılmasında çağrılır
    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        echo "User object is created.<br>";
    }

    // Destruktor - obyekt məhv olarkən çağrılır
    public function __destruct()
    {
        echo "User object is destroyed.<br>";
    }

    public function getFullName()
    {
        return $this->name . " " . $this->surname;
    }
}

// Sinifdən obyekt yaradılması
$user1 = new User("Məmməd", "Əliyev");
echo $user1->getFullName();
