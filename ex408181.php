<?php

abstract class Shape {
    const UNIT = "cm²";
    
    abstract public function area();
}

class Rectangle extends Shape {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function area() {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

$rectangle = new Rectangle(5, 3);
$circle = new Circle(4);

echo "مساحت مستطیل: " . $rectangle->area() . " " . Shape::UNIT . "\n";
echo "مساحت دایره: " . round($circle->area(), 2) . " " . Shape::UNIT . "\n";

?>