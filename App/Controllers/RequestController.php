<?php
include_once 'repository/RequestRepository.php';
include_once 'Config/Database.php';
class RequestController
{
    private $repository;
    private $productRepository;

    public function __construct(){
        $this->repository = new RequestRepository();
        $this->productRepository = new ProductRepository();
    }
    public function index()
    {
        $requests = $this->repository->getAll();
        $products = $this->productRepository->getAll();
        include 'Views/pedidos/listar.php';
    }
    public function create()
    {
        $request = new Request();
        $request->setQuantity($_POST['createQuantity']);
        $request->setProductId($_POST['createProductId']);
        $this->repository->create($request);
        header("Location: /requests");
    }
    public function delete()
    {
        $this->repository->deleteRequest((int) $_GET['id']);

        header("Location: /requests");
    }
}