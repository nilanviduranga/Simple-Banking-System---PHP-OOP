<?php

require_once 'src/BankTransfer.php';
require_once 'src/InternalTransfer.php';
require_once 'src/TransactionMethod.php';

// A simple function that expects ANY object as long as it implements TransactionMethod
function processTransaction(TransactionMethod $method)
{
    // We don't care IF it's a BankTransfer or InternalTransfer
    // We just know it MUST have an execute() method because of the Interface!
    $method->execute(5000);
    echo "--------------------------\n";
}

echo "--- Interface + Polymorphism Demonstration ---\n\n";

// Injecting a BankTransfer object
processTransaction(new BankTransfer());

// Injecting an InternalTransfer object
processTransaction(new InternalTransfer());




//foreach ($accounts as $account) {
//    $account->showDetails();
//}




