<?php
{
    interface BankSystem
    {
        function deposit($amount);
        function withdraw($amount);
    }

    class Bank implements BankSystem
    {
        private $basic = 500;

        function deposit($amount)
        {
           return $this->basic = $this->basic + $amount;
        }

        function withdraw($amount)
        {
            return $this->basic = $this->basic - $amount;
        }
    }

    $mybank = new Bank();

    echo $mybank -> deposit(200).'<br/>';
    echo $mybank -> withdraw(700);

}