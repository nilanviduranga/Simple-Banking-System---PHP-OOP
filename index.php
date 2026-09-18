<?php

require_once 'src/Bank.php';
require_once 'src/SavingsAccount.php';
require_once 'src/CurrentAccount.php';
require_once 'src/Customer.php';

// Create a new Bank
$bank = new Bank();

// Create Accounts using the new Child Classes
$savings = new SavingsAccount("SAV-001", 50000);
$current = new CurrentAccount("CUR-001", 15000);

// Create Customers with their specific Accounts
$customer1 = new Customer(1, "Nilan", $savings);
$customer2 = new Customer(2, "Kamal", $current);

// Add Customers to the Bank
$bank->addCustomer($customer1);
$bank->addCustomer($customer2);

// Perform specific actions for Savings Account
echo "--- Savings Account Actions ---\n";
$savings->addInterest(); // Only available in SavingsAccount

// Perform specific actions for Current Account
echo "\n--- Current Account Actions ---\n";
$current->showOverdraftLimit(); // Only available in CurrentAccount

echo "\n";
// Show all customers in the bank
$bank->showCustomers();



