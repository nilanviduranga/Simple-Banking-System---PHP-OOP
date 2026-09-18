<?php

require_once 'src/Account.php';

// Create a new Account Object
$account = new Account();

// Set properties
$account->accountNumber = "ACC001";
$account->ownerName = "Nilan";
$account->balance = 50000;

// Call the method
$account->showDetails();
