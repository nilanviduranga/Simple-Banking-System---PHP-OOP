<?php

require_once 'src/SavingsAccount.php';

// Create a savings account
$savings = new SavingsAccount("SAV-999", 50000);

echo "--- Doing some transactions ---\n";
$savings->deposit(15000);
$savings->withdraw(5000);
$savings->transfer(10000);
$savings->addInterest(); // Adds interest using deposit() internally

echo "\n";
// Show the transaction history!
$savings->showTransactions();





//foreach ($accounts as $account) {
//    $account->showDetails();
//}




