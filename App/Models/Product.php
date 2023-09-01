<?php
    class Product{
        private $description;
        private $sellingPrice;
        private $stock;
        private array $images;

        public function getDescription() {
            return $this->description;
        }
        
        public function setDescription($description) {
            $this->description = $description;
        }
    
        public function getSellingPrice() {
            return $this->sellingPrice;
        }
        
        public function setSellingPrice($sellingPrice) {
            $this->sellingPrice = $sellingPrice;
        }
    
        public function getStock() {
            return $this->stock;
        }
        
        public function setStock($stock) {
            $this->stock = $stock;
        }

        public function getImages() {
            return $this->images;
        }
        
        public function setImages($images = []) {
            $this->images = $images;
        }
    }