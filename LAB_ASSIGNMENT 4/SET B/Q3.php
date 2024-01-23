<?php 
class book{
    public $book_id;
    public $book_name;
    public $publication;
    public $author;
    public $book_price;
    function book_details()
    {
        echo "The id of book :"."<br>".$this->book_id."<br>";
        echo "The name of book :"."<br>".$this->book_name."<br>";
        echo "The publication of book :"."<br>".$this->publication."<br>";
        echo "The author of book :"."<br>".$this->author."<br>";
        echo "The price of book :"."<br>".$this->book_price."<br>";
    }
}

$b1=new book();
$b1->book_id=101;
$b1->book_name="mrutunjay";
$b1->book_price=300;
$b1->publication="nirali";
$b1->author="vijay sawant";
$b1->book_details();

?>