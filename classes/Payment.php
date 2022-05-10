<?php
class Payment{
    private $iban; 
    public $expire; 
    public $balance;
    
    /**
     * __construct
     *
     * @param  mixed $iban
     * @param  mixed $expire
     * @param  mixed $balance
     * @return void
     */
    function __construct($iban, $expire, $balance){
        $this->iban = $iban;
        $this->expire = $expire;
        $this-> balance = $balance;
        
    }

    public function getIban(){
        return $this->iban;
    }
  
    public function getExpire(){
     return $this-> expire;
    }

    public function getBalance(){
        return $this-> balance;
    }
}

?>