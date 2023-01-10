<?php

class books
{
    var $price;
    var $title;
    
    function __construct($price,$title)
    {
        $this->price = $price;
        $this->title = $title;
    }
    
    function printinfo()
    {
        echo $this->title;
        echo $this->price;
    }
}

class Novel extends books
{
    var $type;
    function __construct($price,$title,$type)
    {
        parent::__construct($price,$title);
        $this->type=$type;
    }
    
    function printinfo()
    {
        return(parent::printinfo() ." ". $this->type);
    }
}

$math = new books(100,"Math");
$eng = new books(180,"English");
$sci = new Novel(200,"Sky Science","Comedy");



$math->printinfo();
$eng->printinfo();
$sci ->printinfo();
?>












