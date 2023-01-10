<?php

class employee
{
    var $name,$salary;
    function __construct($name,$salary)
    {
        $this->name=$name;
        $this->salary=$salary;
    }
    
    public function getinfo()
    {
        echo "Name :".$this->name."\n";
        echo "Salary :".$this->salary."\n";
    }
}

class parttime extends employee
{
    var $time;
    function __construct($name, $salary, $time)
    {
        parent::__construct($name, $salary);
        $this->time=$time;
    }
    
    public function getinfo()
    {
       echo parent::getinfo()."Start time :".$this->time."\n";
    }
}

class fulltime extends employee
{
    var $bonus;
    function __construct($name,$salary,$bonus)
    {
        parent::__construct($name,$salary);
        $this->bonus=$bonus;
    }
    
    public function getinfo()
    {
        echo parent::getinfo()."Bonus :". $this->bonus."\n";
    }
}


$mehraz = new parttime("Mehraz",5000,9);
$mehraz->getinfo();

$anan = new fulltime("Arian Anan",5000,1500);
$anan->getinfo();


?>
