<?php
include_once 'repository/ProductRepository.php';
include_once 'Config/Database.php';
class ProductController
{
    private $repository;

    public function __construct(){
        $this->repository = new ProductRepository();
    }
    public function index()
    {
        $products = $this->repository->getAll();
        include 'Views/modules/produtos/listar.php';
    }
}