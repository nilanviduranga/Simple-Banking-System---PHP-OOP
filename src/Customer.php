<?php

require_once 'Account.php';

class Customer
{
    public int $id;
    public string $name;
    public Account $account;

    public function __construct(int $id, string $name, Account $account)
    {
        $this->id = $id;
        $this->name = $name;
        $this->account = $account;
    }

    public function showCustomerDetails(): void
    {
        echo "Customer ID: " . $this->id . "\n";
        echo "Customer Name: " . $this->name . "\n";
        echo "--- Account Details ---\n";
        $this->account->showDetails();
    }
}
