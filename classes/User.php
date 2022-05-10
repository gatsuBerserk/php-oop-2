<?php 
   require_once __DIR__ ."/Payment.php";
   require_once __DIR__ ."/Products.php";
   class User{      
      private $first_name;
      private $surname; 
      private $dateBirth;
      private $pay_card;
      private $isRegistred;
      public $discount;
   
   
      
        
    /**
     * __construct
     *
     * @param  mixed $first_name
     * @param  mixed $surname
     * @param  mixed $dateBirth
     * @param  mixed $pay_card
     * @param  mixed $isRegistred
     * @return void
     */
    public function  __construct($first_name, $surname, $dateBirth, $pay_card, $isRegistred){
      $this->first_name = $first_name;
      $this -> surname = $surname;
      $this -> dateBirth = $dateBirth;
      $this -> isRegistred = $isRegistred;
      $this->setPayment($pay_card);
      $this -> discount = $this -> setDiscount();
   }
   // controlliamo se sia una carta di credito altrimenti ritorna null
   public function setPayment($pay_card){
      if ($pay_card instanceof Payment){
         $this->pay_card = $pay_card;
      }
      
   }
   public function setDiscount(){
      if ( $this -> isRegistred){
         $this -> discount = 20;
      }else{
         $this -> discount = 0;
      }
      return $this -> discount;
   }
   public function getDiscount(){
      return  $this -> discount;
   }
   public function getName(){
      return $this->first_name;
   }

   public function getSurname(){
      return $this->surname;
   }
   public function getBalance(){
      return $this->pay_card->balance ."€";
   }  

   public function buyProduct($product)
    {
        if ($this->pay_card->expire < date('Y'))
            return 'Carta di credito scaduta.';

        if ($this->getBalance() < $product->price)
            return 'Credito insufficiente';


        if ($this->discount > 0) {
            $price = $product->price - $product->price / 100 * $this->discount;
            $this->pay_card->balance -= $price;

            return "Transazione approvata, hai ricevuto uno sconto del $this->discount% e hai speso " . round($price, 2) . "€";
        } else {
            $this->pay_card->balance -= $product->price;

            return "Transazione approvata, non hai ricevuto nessuno sconto e hai speso " . round($product->price, 2) . "€";
        }
    }

   }

?>