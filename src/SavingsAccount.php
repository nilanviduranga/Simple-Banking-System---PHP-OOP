<?php

require_once 'Account.php';

class SavingsAccount extends Account
{
    public float $interestRate = 5.0; // 5% interest

    public function addInterest(): void
    {
        // We use getBalance() and deposit() because $balance is private in Account
        $interestAmount = $this->getBalance() * ($this->interestRate / 100);
        echo "Calculating interest...\n";
        $this->deposit($interestAmount);
    }
}
