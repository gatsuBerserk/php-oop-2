<?php 
    class Products{
        private $name_product; 
        public $price;
        private $quantity; 
        private $description;
        
        
              
               
        /**
         * __construct
         *
         * @param  mixed $name_product
         * @param  mixed $price
         * @param  mixed $description
         * @return void
         */
        function __construct($name_product, $price,$quantity, $description){
            $this->name_product = $name_product;
            $this-> price = $price;
            $this->quantity = $quantity;
            $this-> description = $description;           
            
        }

        public function getName(){
            return $this-> name_product;
        }
        public function getPrice(){
            return $this-> price . "€";
        }
        public function getQuantity(){
            return $this->quantity;
        }
        public function getDescription(){
            return $this-> description;
        }
    }




?>