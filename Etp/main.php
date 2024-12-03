<?php
require_once 'Book.php';

$book1 = new Book();
if ($book1->setTitle("1984") !== true) echo $book1->setTitle("1984") . "<br>";
if ($book1->setAuthor("George Orwell") !== true) echo $book1->setAuthor("George Orwell") . "<br>";
if ($book1->setPrice(19.99) !== true) echo $book1->setPrice(19.99) . "<br>";

$book2 = new Book();
if ($book2->setTitle("To Kill a Mockingbird") !== true) echo $book2->setTitle("To Kill a Mockingbird") . "<br>";
if ($book2->setAuthor("Harper Lee") !== true) echo $book2->setAuthor("Harper Lee") . "<br>";
if ($book2->setPrice(24.95) !== true) echo $book2->setPrice(24.95) . "<br>";

$book3 = new Book();
if ($book3->setTitle("") !== true) echo $book3->setTitle("") . "<br>";
if ($book3->setAuthor("F. Scott Fitzgerald") !== true) echo $book3->setAuthor("F. Scott Fitzgerald") . "<br>";
if ($book3->setPrice(-5) !== true) echo $book3->setPrice(-5) . "<br>";

echo "<h1>Book Details</h1>";
if ($book1->getTitle() && $book1->getAuthor() && $book1->getPrice() !== null) {
    $book1->displayDetails();
}
if ($book2->getTitle() && $book2->getAuthor() && $book2->getPrice() !== null) {
    $book2->displayDetails();
}
if ($book3->getTitle() && $book3->getAuthor() && $book3->getPrice() !== null) {
    $book3->displayDetails();
}
?>
