<?php
require_once 'Autoloader.php';
require_once 'CheckAccountDataService.php';
require_once 'BankingBusinessService.php';

$bs = new BankingBusinessService();

$checkbalance = $bs->getCheckingBalance();
$savingbalance = $bs->getSavingsBalance();

echo "Current values:<br>";
echo "Checkng balance = " . $checkbalance . "<br>";
echo "Saving balance = " . $savingbalance . "<br>";

// echo "Take $100 from checking and put it into savings<br>";
$bs->transaction(100);

$checkbalance = $bs->getCheckingBalance();
$savingbalance = $bs->getSavingsBalance();

echo "Current values:<br>";
echo "Checkng balance = " . $checkbalance . "<br>";
echo "Saving balance = " . $savingbalance . "<br>";

?>