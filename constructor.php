<?php
class student {
    public $name;
    public $roll;
    public $class;
    public $section;

    // Constructor method
    function __construct($name, $roll, $class, $section) {
        $this->name = $name;
        $this->roll = $roll;
        $this->class = $class;
        $this->section = $section;
    }

    function get_name() {
        return $this->name;
    }
    function get_roll() {
        return $this->roll;
    }
    function get_class() {
        return $this->class;
    }
    function get_section() {
        return $this->section;
    }
}

// Creating an instance of the student class
$student1 = new student('Vansh', 3, 'Btech', 'A');
echo "Name of the student is: " . $student1->get_name() . "<br>";
echo "Roll of the student is: " . $student1->get_roll() . "<br>";
echo "Class of the student is: " . $student1->get_class() . "<br>";
echo "Section of the student is: " . $student1->get_section() . "<br>";
?>