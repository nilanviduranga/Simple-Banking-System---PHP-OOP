<?php

require_once 'src/SavingsAccount.php';
require_once 'src/CurrentAccount.php';

// Create different types of accounts
$savings = new SavingsAccount("SAV-001", 50000);
$current = new CurrentAccount("CUR-001", 15000);
// We can even create a generic account to see its type
$generic = new Account("GEN-001", 5000);

// Put them all in an array. 
// They are all of type 'Account' (IS-A relationship)
$accounts = [$savings, $current, $generic];

echo "--- Polymorphism Demonstration ---\n";

foreach ($accounts as $account) {
    // We call the EXACT SAME method name on different objects
    echo "Account Number: " . $account->accountNumber . " is a " . $account->getAccountType() . "\n";
}

//foreach ($accounts as $account) {
//    $account->showDetails();
//}




