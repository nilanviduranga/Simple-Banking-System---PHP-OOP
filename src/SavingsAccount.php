<?php

require_once 'Account.php';

class SavingsAccount extends Account
{
    public float $interestRate = 5.0; // 5% interest

    public function addInterest(): void
    {
        $interestAmount = $this->calculateInterest();
        echo "Calculating interest...\n";
        $this->deposit($interestAmount);
    }

    public function calculateInterest(): float
    {
        return $this->getBalance() * ($this->interestRate / 100);
    }

    public function getAccountType(): string
    {
        return "Savings Account";
    }

    //public function showDetails(): void
    //{
    //    echo "Account Number: " . $this->accountNumber . "\n";
    //    echo "Balance: Rs. " . $this->getBalance() . "\n";
    //    echo "Interest Rate: 15%\n";
    //    echo "--------------------------\n";
    //}

}
