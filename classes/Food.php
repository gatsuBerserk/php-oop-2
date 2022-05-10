<?php 
    require_once __DIR__ ."/Products.php"; 

    class Food extends Products{
        private  $expiry_date; 
        private $animal;

        
              
        /**
         * __construct
         *
         * @param  mixed $name_product
         * @param  mixed $price
         * @param  mixed $description
         * @param  mixed $expiry_date
         * @param  mixed $animal
         * @return void
         */
        function __construct($name_product, $price, $quantity, $description, $expiry_date, $animal){
            parent::__construct($name_product, $price, $quantity, $description);
            $this-> expiry_date = $expiry_date;
            $this-> animal = $animal;

        }

        public function getExpiry(){
            return $this-> expiry_date;
        } 
        public function getAnimal(){
            return $this-> animal;
        }
        
    }
?>