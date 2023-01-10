<?php

interface animal
{
    public function breath();
}

abstract class vertebrate implements animal
{
    public function breath()
    {
        echo "Vertebrate Breathing";
    }
    public abstract function printinfo(); 
}

abstract class invertebrate implements animal
{
    public function breath()
    {
        echo "Invertebrate Breathing";
    }
    public function printinfo()
    {
        echo "I'm invertebrate";
    }
}

class mamal extends vertebrate
{
    public function printinfo()
    {
        echo "I'm Mamal";
    }
    
    public function walk()
    {
        echo "I can walk";
    }
}

$mammal = new mamal;
$mammal->breath();
$mammal->printinfo();
$mammal->walk();



?>


