<?php

include("Animal.php");

class AnimalFactoy{


    public static function createSong($type):Animal
    {
        // echo $type;
        if($type === "tiger")
        {
            return new Tiger();
        }elseif($type === "cat")
        {
            return new Cat();
        }elseif($type === "dog")
        {
            return new Dog();
        }
    }
}