<?php 

class CurrentAccount  extends BankAccount{
    private $overdraftLimit;

    public function __construct($accountNumber, $initialBalance, $bank) {
    parent::__construct($accountNumber, $initialBalance, $bank,);
    // $this->overdraftLimit = $overdraftLimit;
}

public function withdraw($amount) {
    if($amount > ($this->balance + $this->overdraftLimit)) {
    echo "Withdrawal denied: exceeds overdraft limit";
    }else {
        $this->balance -=$amount;
        echo "Withdrew N{$amount}.
        New Balance: N{$this->balance}";
    }
}

public function showDetails() {
    echo "Current Account: {$this->accountNumber}
    | Balance: N{$this->balance}
    | Overdraft Limit: N{$this-> overdraftLimit}";
}
}