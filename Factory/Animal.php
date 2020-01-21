<?php

interface Animal
{
    function speak();
}

class Tiger implements Animal
{
    function speak()
    {
        echo "Tiger";
    }
}
class Cat implements Animal
{
    function speak()
    {
        echo "Cat";
    }
}
class Dog implements Animal
{
    function speak()
    {
        echo "Dog";
    }
}