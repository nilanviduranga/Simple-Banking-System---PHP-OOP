<?php

require_once 'Account.php';

class CurrentAccount extends Account
{
    public float $overdraftLimit = 25000.0;

    public function showOverdraftLimit(): void
    {
        echo "Overdraft Limit is: Rs. " . $this->overdraftLimit . "\n";
    }

    public function getAccountType(): string
    {
        return "Current Account";
    }

    public function calculateInterest(): float
    {
        // Current accounts usually do not earn interest
        return 0.0;
    }
}
