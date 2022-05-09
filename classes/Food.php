<?php 
    include_once __DIR__ ."/Products.php"; 

    class Food extends Products{
        private  $expiry_date; 
        private $animal;

        
        /**
         * __construct
         *
         * @param  string $name_product
         * @param  float $price_product
         * @param  string $description
         * @param  mixed $expiry_date
         * @param  string $animal
         * @return void
         */
        function __construct($name_product, $price_product, $description, $expiry_date, $animal){
            parent::__construct($name_product, $price_product, $description);
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