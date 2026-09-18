<?php

class Account
{
    public string $accountNumber;
    public string $ownerName;
    private float $balance;

    public function __construct(string $accountNumber, string $ownerName, float $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->ownerName = $ownerName;
        $this->balance = $balance;
    }

    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: Rs. " . $amount . "\n";
        } else {
            echo "Deposit amount must be greater than zero.\n";
        }
    }

    public function withdraw(float $amount): void
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew: Rs. " . $amount . "\n";
        } else {
            echo "Invalid withdraw amount or insufficient balance.\n";
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function showDetails(): void
    {
        echo "Account Number: " . $this->accountNumber . "\n";
        echo "Owner Name: " . $this->ownerName . "\n";
        echo "Balance: Rs. " . $this->balance . "\n";
        echo "--------------------------\n";
    }
}
