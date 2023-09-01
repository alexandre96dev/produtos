<?php
include_once 'repository/ProductRepository.php';
include_once 'Config/Database.php';
class ProductController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ProductRepository();
    }
    public function index()
    {
        $products = $this->repository->getAll();
        include 'Views/produtos/listar.php';
    }
    public function create()
    {
        $product = new Product();
        $product->setDescription($_POST['createDescription']);
        $product->setSellingPrice($_POST['createSellingPrice']);
        $product->setStock($_POST['createStock']);
        $this->repository->create($product);
        
        $arrayImages = [];

        foreach ($_FILES['imagem']['tmp_name'] as $imagesBinary) {
            $imageCode = file_get_contents($imagesBinary);
            $image_base64 = base64_encode($imageCode);
            $arrayImages[] = $image_base64;
            // echo '<img src="data:image/jpeg;base64,' . $image_base64 . '" alt="Imagem em base64">';
        }
        
        $product->setImages($arrayImages);
        // header("Location: /");
    }
    public function delete()
    {
        $this->repository->deleteProduct((int) $_GET['id']);

        header("Location: /");
    }
}
