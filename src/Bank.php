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

    public function chargeMonthlyFees(): void
    {
        // The Bank class creates the TransactionService inside itself.
        // This makes TransactionService a "Dependency" of Bank.
        require_once 'TransactionService.php';
        $service = new TransactionService();

        echo "--- Charging Monthly Fees ---\n";
        foreach ($this->customers as $customer) {
            $service->processFee($customer->account, 100.0);
        }
    }
}
