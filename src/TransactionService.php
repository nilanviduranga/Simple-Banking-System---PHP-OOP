<?php

class TransactionService
{
    public function processFee(Account $account, float $feeAmount): void
    {
        echo "TransactionService: Processing bank fee of Rs. {$feeAmount}...\n";
        $account->withdraw($feeAmount);
    }
}
