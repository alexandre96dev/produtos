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
    public function create()
    {
        $product = new Product();
        $product->setDescription($_POST['createDescription']);
        $product->setSellingPrice($_POST['createSellingPrice']);
        $product->setStock($_POST['createStock']);
        $this->repository->create($product);
        header("Location: /");
    }
    public function delete()
    {
        $this->repository->deleteProduct((int) $_GET['id']);

        header("Location: /");
    }
}