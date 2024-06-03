<?php
// 動物類別。
class Animal
{
    public $name = 'animal';
    protected $age = 12;
    private $weight = 100;

    public function __construct()
    {
        echo "weight is";
        echo $this->weight;
        echo "<br>";
        $this->run();
    }

    public function run()
    {
        echo "animal is running";
        echo "<br>";
        echo "speed is ";
        echo $this->speed();
        echo "<br>";
        echo $this->age;
    }
    private function speed()
    {
        return "slow speed";
    }
}

// 動物類別中的狗狗
class Cat extends Animal
{
    public $name = 'cat';

    public function __construct($name)
    {
        $this->name = $name;
        $this->run();
    }

    public function run()
    {
        echo $this->name;
        echo " is running";
        echo "<br>";
        echo "speed is ";
        echo $this->speed();
        echo "<br>";
        echo $this->age;
    }
    private function speed()
    {
        return "high speed";
    }
}

// $animal = new Animal;

// $cat = new Cat();
// echo $cat->name;
// echo $cat->run();
