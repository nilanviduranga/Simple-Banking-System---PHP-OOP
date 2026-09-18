<?php

class Account
{
    public string $accountNumber;
    public string $ownerName;
    public float $balance;

    public function showDetails(): void
    {
        echo "Account Number: " . $this->accountNumber . "\n";
        echo "Owner Name: " . $this->ownerName . "\n";
        echo "Balance: Rs. " . $this->balance . "\n";
        echo "--------------------------\n";
    }
}
