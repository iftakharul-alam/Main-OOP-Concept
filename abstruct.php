<?php
{
    abstract class Animal
    {
        public function move()
        {
           return 'Animal can move';
        }

        public abstract  function eye();
    }

    class Cat extends Animal
    {
        public function eye()
        {
            return 'Cat has eyes';
        }

        public function run()
        {
            return 'cat can run';
        }
    }

    $cat = new Cat();
    echo $cat -> move()."<br/>";
    echo $cat -> eye()."<br/>";
}