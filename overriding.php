<?php
{
    class Animal
    {
        public function move()
        {
            return 'Animal can move';
        }
        public function eye()
        {
            return 'Animal has eyes';
        }
    }

    class Cat extends Animal
    {
        public function move()
        {
            return 'Cat can move, walk and run';
        }
    }

    $cat = new Cat();
    echo $cat -> move().'<br/>';
    echo $cat -> eye();
}