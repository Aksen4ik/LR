<?php
class Animal {
    public $food;
    public $location;
  
    public function makeNoise() {
      echo "Животное говорит";
    }
  
    public function eat() {
      echo "Животное ест";
    }
  
    public function sleep() {
      echo "Животное спит";
    }
  }
  
  class Dog extends Animal {
    public $breed;
  
    public function makeNoise() {
      echo "Собака лает";
    }
  
    public function eat() {
      echo "Собака ест кость";
    }
  
    public function sleep() {
      echo "Собака спит в будке";
    }
  }
  
  class Cat extends Animal {
    public $color;
  
    public function makeNoise() {
      echo "Кошка мяукает";
    }
  
    public function eat() {
      echo "Кошка ест рыбу";
    }
  
    public function sleep() {
      echo "Кошка спит на окне";
    }
  }
  
  class Horse extends Animal {
    public $breed;
  
    public function makeNoise() {
      echo "Лошадь ржет";
    }
  
    public function eat() {
      echo "Лошадь ест сено";
    }
  
    public function sleep() {
      echo "Лошадь спит в конюшне";
    }
  }
  
  class Veterinarian {
    public function treatAnimal(Animal $animal) {
      echo "Пациент: " . get_class($animal) . ". Ест: " . $animal->food . ". Место обитания: " . $animal->location;
    }
  }
  
  $dog = new Dog();
  $dog->food = "кость";
  $dog->location = "в доме";
  
  $vet = new Veterinarian();
  $vet->treatAnimal($dog);
?>