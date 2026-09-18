<?php

require_once 'TransactionMethod.php';

class BankTransfer implements TransactionMethod
{
    public function execute(float $amount): bool
    {
        echo "Processing Bank Transfer of Rs. " . $amount . "...\n";
        echo "Connecting to Central Bank API...\n";
        echo "Bank Transfer Successful!\n";
        return true;
    }
}
