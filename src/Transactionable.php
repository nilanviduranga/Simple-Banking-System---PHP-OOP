<?php

interface Transactionable
{
    public function transfer(float $amount): bool;
}
