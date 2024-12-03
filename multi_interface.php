<?php
interface Movavle{
    public function move();
}
interface Flyable{
    public function fly();
}
interface Swimmable{
    public function swim();
}
class Bird implements Movavle,Flyable{
    public function move(){
        echo "Bird can move <br>";
    }
    public function fly(){
        echo "Bird can fly<br>";
    }
}

class Fish implements Movavle,Swimmable{
    public function move(){
        echo "Fish can not move <br>";
    }
    public function swim(){
        echo "Fish can swim";
    }
}
$bird=new Bird();
$fish=new Fish();
$bird->move();
$bird->fly();
$fish->move();
$fish->swim();




?>