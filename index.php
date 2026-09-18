<?php

require_once 'src/Account.php';

// Create a new Account Object using the Constructor
$account = new Account("ACC001", "Nilan", 50000);

// Call the method
$account->showDetails();

