<?php

class Transaction
{
    public int $id;
    public float $amount;
    public string $type; // e.g., 'Deposit', 'Withdrawal'
    public string $date;

    public function __construct(int $id, float $amount, string $type)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->type = $type;
        $this->date = date('Y-m-d H:i:s');
    }

    public function showTransactionDetails(): void
    {
        echo "[$this->date] {$this->type}: Rs. {$this->amount} (TXN ID: {$this->id})\n";
    }
}
