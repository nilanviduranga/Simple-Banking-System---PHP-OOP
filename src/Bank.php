<?php

require_once 'Customer.php';

class Bank
{
    private array $customers = [];

    public function addCustomer(Customer $customer): void
    {
        $this->customers[] = $customer;
    }

    public function showCustomers(): void
    {
        echo "=== Bank Customers ===\n";
        foreach ($this->customers as $customer) {
            $customer->showCustomerDetails();
            echo "--------------------------\n";
        }
    }
}
