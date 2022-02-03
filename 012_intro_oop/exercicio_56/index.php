<?php

use Human as GlobalHuman;

class Human{
    private $name;
    private $age; 

    function speak($name){
        echo "Hi, I'm human, my name's $name <br>";
    } 

}

class Teacher extends GlobalHuman{
    
    protected $stack = ["Java", "PHP", ".NET"];
    protected $hobie = "Drink coffe";

    public function teaching(){
        echo "The teacher is teaching  programming " . $this->stack[1] ;
    }
}


$samuel = new Human;

$samuel->speak("Samuel"); 

$matheus = new Teacher;

$matheus->speak("Matheus"); 
$matheus->teaching();