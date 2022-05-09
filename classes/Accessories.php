<?php 
    include_once __DIR__ ."/Products.php";

    class Accessories extends Products{ 
        private $type;

        function __construct($name_product, $price_product, $description, $type){
            parent::__construct($name_product, $price_product, $description);
            $this->type = $type;            
        }
        
        public function getType(){
            return $this -> type;
        }
    }
?>