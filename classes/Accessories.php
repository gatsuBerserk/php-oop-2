<?php 
    require_once __DIR__ ."/Products.php";

    class Accessories extends Products{ 
        private $type;
        
                
        /**
         * __construct
         *
         * @param  mixed $name_product
         * @param  mixed $price_product
         * @param  mixed $quantity
         * @param  mixed $description
         * @param  mixed $type
         * @return void
         */
        function __construct($name_product, $price_product,$quantity, $description, $type){
            parent::__construct($name_product, $price_product, $quantity, $description);
            $this->type = $type;            
        }
        
        public function getType(){
            return $this -> type;
        }
    }
?>