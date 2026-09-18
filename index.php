<?php

require_once 'src/SavingsAccount.php';
require_once 'src/CurrentAccount.php';

// Create different types of accounts
$savings = new SavingsAccount("SAV-001", 50000);
$current = new CurrentAccount("CUR-001", 15000);

// We CANNOT create a generic account anymore!
// $generic = new Account("GEN-001", 5000); // This will cause an error

$accounts = [$savings, $current];

echo "--- Abstract Class Demonstration ---\n";

foreach ($accounts as $account) {
    echo "Account Number: " . $account->accountNumber . " (" . $account->getAccountType() . ")\n";
    echo "Calculated Interest: Rs. " . $account->calculateInterest() . "\n";
    echo "--------------------------\n";
}


//foreach ($accounts as $account) {
//    $account->showDetails();
//}




