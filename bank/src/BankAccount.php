<?php

class BankAccount  {
    protected $accountNumber;
    protected $balance;
    protected $bank;

public function __construct($accountNumber, $bank, $initialBalance = 0) {
    $this->AccountNumber = $accountNumber;
    $this->balance = $initialBalance;
    $this->bank = $bank;
}

public function deposit($amount) {
    $this->balance += $amount;
    echo "Deposited N{$amount}. New Balance: N{$this->balance}. <br>";
}

public function withdraw($amount) {
    if($amount >  $this->balance) {
        echo "Insufficient funds.";
    }else {
        $this->balance -= $amount;
        echo "Withdrew N {$amount}. New Balance: N{$this->balance}. <br>";
    }
} 

public function getBalance() {
    return $this->balance;
}

public function showDetails() {
    echo "Account: {$this->acountNumber} | Balance: N{$this->balance}. <br>";
}

}