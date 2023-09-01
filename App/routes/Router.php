<?php
include_once './Controllers/ProductController.php';

class Router
{
    private $route;
    private $productController;
    public function __construct($url)
    {
        $this->route = $url;
        $this->productController = new ProductController();
    }

    public function switchRoute()
    {
        switch ($this->route) {
            case '/':
                $this->productController->index();
                break;
            case '/products/save':
                $this->productController->create();
                break;
            case '/products/delete':
                $this->productController->delete();
                break;
            default:
                echo "rota não encontrada";
                break;
        }
    }
}
