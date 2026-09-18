<?php

require_once 'src/Bank.php';
require_once 'src/Customer.php';
require_once 'src/SavingsAccount.php';

// Setup Bank and Customer
$bank = new Bank();
$savings = new SavingsAccount("SAV-111", 5000);
$customer = new Customer(1, "Nilan", $savings);
$bank->addCustomer($customer);

echo "Initial Balance: Rs. " . $savings->getBalance() . "\n";

// Charge monthly fees using the Bank's new method
$bank->chargeMonthlyFees();

echo "Final Balance: Rs. " . $savings->getBalance() . "\n";






//foreach ($accounts as $account) {
//    $account->showDetails();
//}




