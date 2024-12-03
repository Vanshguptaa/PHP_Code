<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function hello() {
        echo "Hyy how are you<br>";
        echo "Hyy how are you<br>";
        echo "Hyy how are you<br>";
        echo "Hyy how are you<br>";
        echo "Hyy how are you<br>";
    }

    function __destruct() {
        echo "The fruit is {$this->name} and the color is {$this->color}<br>";
    }
}

$apple = new Fruit('Apple', 'Red');
$apple->hello();
?>