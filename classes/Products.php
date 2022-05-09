<?php 
    class Products{
        private $name_product; 
        private $price_product;
        private $description; 
        
        /**
         * __construct
         *
         * @param  string $name_product
         * @param  float $price_product
         * @param  string $description
         * @return void
         */
        function __construct($name_product, $price_product, $description){
            $this->name_product = $name_product;
            $this-> price_product = $price_product;
            $this-> description = $description;           
            
        }

        public function getName(){
            return $this-> name_product;
        }
        public function getPrice(){
            return $this-> price_product . "€";
        }
        public function getDescription(){
            return $this-> description;
        }
    }




?>