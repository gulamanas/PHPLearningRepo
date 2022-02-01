<?php

class Customer
{
    public $id;
    public $name;
    public $email;
    public $balance;

    public function __construct()
    {
        echo "The construcor ran....";
    }

    public function getCustomer($id)
    {
        $this->id = $id;
        return 'John Doe';
    }

    public function __destruct()
    {
        echo 'the destruct ran.....';
    }
}

$customer = new Customer;
echo $customer->getCustomer(1);
