<?php

require_once 'src/Bank.php';
require_once 'src/Account.php';
require_once 'src/Customer.php';

// Create a new Bank
$bank = new Bank();

// Create Accounts
$account1 = new Account("ACC001", 50000);
$account2 = new Account("ACC002", 15000);

// Create Customers with their Accounts
$customer1 = new Customer(1, "Nilan", $account1);
$customer2 = new Customer(2, "Kamal", $account2);

// Add Customers to the Bank
$bank->addCustomer($customer1);
$bank->addCustomer($customer2);

// Perform a transaction just to show it works
$customer1->account->deposit(5000);
$customer2->account->withdraw(2000);

// Show all customers in the bank
$bank->showCustomers();



