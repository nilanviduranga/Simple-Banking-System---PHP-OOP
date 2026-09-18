<?php

require_once 'src/SavingsAccount.php';
require_once 'src/CurrentAccount.php';

// Create different types of accounts
$savings = new SavingsAccount("SAV-001", 50000);
$current = new CurrentAccount("CUR-001", 15000);

echo "--- Interface Demonstration ---\n";

// Both Savings and Current accounts are "Transactionable"
// So they must have the transfer() method implemented
echo "Attempting to transfer Rs. 10000 from Savings...\n";
$isSuccess = $savings->transfer(10000);

echo "\nAttempting to transfer Rs. 20000 from Current...\n";
$isSuccess2 = $current->transfer(20000); // Should fail due to insufficient balance

echo "--------------------------\n";



//foreach ($accounts as $account) {
//    $account->showDetails();
//}




