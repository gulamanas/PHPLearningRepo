<?php

abstract class Customer
{
    private     $id;
    public      $name;
    protected     $email;
    private     $balance;

    public function __construct($id, $name, $email, $balance)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->email    = $email;
        $this->balance  = $balance;
    }

    abstract public function getEmail();
}


class Subscriber extends Customer
{
    public $plan;

    public function __construct($id, $name, $email, $balance, $plan)
    {
        parent::__construct($id, $name, $email, $balance);
        $this->plan = $plan;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
$subscriber = new Subscriber(1, 'Gulam Anas', 'anas@gmail.in', 0, 'Pro');

echo $subscriber->plan . '<br>';
echo $subscriber->getEmail() . '<br>';


class User
{
    public $username;
    public $password;
    public static $passwordLength = 6;

    public static function getPasswordLength()
    {
        return self::$passwordLength;
    }
}

echo User::$passwordLength;
