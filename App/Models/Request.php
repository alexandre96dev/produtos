<?php
    class Request {
        private $quantity;
        private $productId;

        public function getQuantity() {
            return $this->quantity;
        }
        
        public function setQuantity($quantity) {
            $this->quantity = $quantity;
        }
    
        public function getProductId() {
            return $this->productId;
        }
        
        public function setProductId($productId) {
            $this->productId = $productId;
        }

    }