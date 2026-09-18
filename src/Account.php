<?php

require_once 'Transactionable.php';
require_once 'Transaction.php';

abstract class Account implements Transactionable
{
    public string $accountNumber;
    private float $balance;
    private array $transactions = [];

    public function __construct(string $accountNumber, float $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;
            // Record the transaction
            $this->addTransaction(new Transaction(rand(1000, 9999), $amount, "Deposit"));
            echo "Deposited: Rs. " . $amount . "\n";
        } else {
            echo "Deposit amount must be greater than zero.\n";
        }
    }

    public function withdraw(float $amount): void
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            // Record the transaction
            $this->addTransaction(new Transaction(rand(1000, 9999), $amount, "Withdrawal"));
            echo "Withdrew: Rs. " . $amount . "\n";
        } else {
            echo "Invalid withdraw amount or insufficient balance.\n";
        }
    }

    private function addTransaction(Transaction $transaction): void
    {
        $this->transactions[] = $transaction;
    }

    public function showTransactions(): void
    {
        echo "=== Transaction History for {$this->accountNumber} ===\n";
        if (empty($this->transactions)) {
            echo "No transactions found.\n";
            return;
        }
        foreach ($this->transactions as $transaction) {
            $transaction->showTransactionDetails();
        }
        echo "---------------------------------------\n";
    }

    public function transfer(float $amount): bool
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            $this->addTransaction(new Transaction(rand(1000, 9999), $amount, "Transfer Out"));
            echo "Successfully transferred Rs. " . $amount . " to external account.\n";
            return true;
        }
        echo "Transfer failed! Insufficient balance.\n";
        return false;
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
