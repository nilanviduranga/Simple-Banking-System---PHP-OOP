<?php

abstract class Account
{
    public string $accountNumber;
    private float $balance;

    public function __construct(string $accountNumber, float $balance)
    {
        $this->accountNumber = $accountNumber;
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

    public function getAccountType(): string
    {
        return "Account";
    }

    public function showDetails(): void
    {
        echo "Account Number: " . $this->accountNumber . "\n";
        echo "Balance: Rs. " . $this->balance . "\n";
        echo "--------------------------\n";
    }

    // Abstract method: All child classes MUST implement this
    abstract public function calculateInterest(): float;
}
