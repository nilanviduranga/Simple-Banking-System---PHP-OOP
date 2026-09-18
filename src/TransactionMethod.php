<?php

interface TransactionMethod
{
    public function execute(float $amount): bool;
}
