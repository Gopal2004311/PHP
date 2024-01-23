<?php
class fruit{
    public $name;
    public $color;
    public $price;

    function display() 
     {
       echo $this->name."<br>";
       echo $this->color."<br>";
       echo $this->price."<br>"; 
    }
}
 
$f1=new fruit();
$f1->name="apple";
$f1->color="red";
$f1->price=100;
$f1->display();


$f2=new fruit();
$f2->name="banana";
$f2->color="yellow";
$f2->price=30;
$f2->display();


?>