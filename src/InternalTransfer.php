<?php

require_once 'TransactionMethod.php';

class InternalTransfer implements TransactionMethod
{
    public function execute(float $amount): bool
    {
        echo "Processing Internal Transfer of Rs. " . $amount . "...\n";
        echo "Updating local database ledgers...\n";
        echo "Internal Transfer Successful!\n";
        return true;
    }
}
