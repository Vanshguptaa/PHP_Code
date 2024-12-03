<?php
class Book {
    private $title;
    private $author;
    private $price;

    public function setTitle($title) {
        if (empty(trim($title))) {
            return "Title cannot be empty.";
        }
        $this->title = $title;
        return true;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setAuthor($author) {
        if (empty(trim($author))) {
            return "Author cannot be empty.";
        }
        $this->author = $author;
        return true;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setPrice($price) {
        if (!is_numeric($price) || $price < 0) {
            return "Price must be a positive number.";
        }
        $this->price = $price;
        return true;
    }

    public function getPrice() {
        return $this->price;
    }

    public function displayDetails() {
        echo "Title: " . $this->getTitle() . "<br>";
        echo "Author: " . $this->getAuthor() . "<br>";
        echo "Price: $" . number_format($this->getPrice(), 2) . "<br><br>";
    }
}
?>
