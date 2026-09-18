<?php

require_once 'src/Account.php';
require_once 'src/Customer.php';

// Create a new Account Object
$account = new Account("ACC001", 50000);

// Create a Customer Object and assign the Account to it
$customer = new Customer(1, "Nilan", $account);

// Show customer details (which includes account details)
$customer->showCustomerDetails();

// Perform a transaction through the customer's account
echo "Depositing Rs. 5000...\n";
$customer->account->deposit(5000);

echo "Current Balance is: Rs. " . $customer->account->getBalance() . "\n";
echo "--------------------------\n";


