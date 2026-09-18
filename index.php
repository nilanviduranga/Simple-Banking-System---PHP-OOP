<?php

require_once 'src/Account.php';

// Create a new Account Object
$account = new Account("ACC001", "Nilan", 50000);

$account->showDetails();

// Perform transactions using methods
$account->deposit(5000);
$account->withdraw(2000);

// Try to get balance
echo "Current Balance is: Rs. " . $account->getBalance() . "\n";
echo "--------------------------\n";


