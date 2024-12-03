<?php
// class Fruit{
//     public $name;
//     public $color;


//     function set_name($name){
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }   
//     function set_color($color){
//         $this->color = $color;
//     }
//     function get_color(){
//         return $this->color;
//     }
// }
// $apple=new Fruit();
// $apple->set_name('Apple');
// $apple->set_color('Red');
// echo "Name of the fruit is: ".$apple->get_name()."<br>";
// echo "Color of the fruit is: ".$apple->get_color()."<br>";




//------------------------------


// class for student class room

class Student{
    public $name;
    public $roll;
    public $class;
    public $section;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_roll($roll){
        $this->roll = $roll;
    }
    function get_roll(){
        return $this->roll;
    }
    function set_class($class){
        $this->class = $class;
    }
    function get_class(){
        return $this->class;
    }
    function set_section($section){
        $this->section = $section;
    }
    function get_section(){
        return $this->section;
    }
}
$student1 = new Student();
$student1->set_name('vansh');
$student1->set_roll('03');
$student1->set_class('Btech');
$student1->set_section('A');
echo "Name of the student is: ".$student1->get_name()."<br>";
echo "Roll of the student is: ".$student1->get_roll()."<br>";
echo "Class of the student is: ".$student1->get_class()."<br>";
echo "Section of the student is: ".$student1->get_section()."<br>";
 







?>