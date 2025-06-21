<?php 

require_once 'src/BankAccount.php';
require_once 'src/SavingsAccount.php';
require_once 'src/CurrentAccount.php';

$accountOne = new SavingsAccount("0114116070", "GTB", 100000,  0.05);
$accountTwo = new CurrentAccount("0229339139", "Access Bank", 5000,  2000);

$accountOne->deposit(2000);
$accountOne->applyInterest(2000);
$accountOne->showDetails(2000);
 
echo "<br>";

$accountTwo->withdraw(6000);
$accountTwo->withdraw(2000);
$accountTwo->deposit(3000);
$accountTwo->showDetails();