<?php
interface  ProductRepositoryInterface{
    public function getAll();
    public function findById($id);
    public function create(Product $product);
    public function updateProduct(Product $product);
    public function deleteProduct($id);
}