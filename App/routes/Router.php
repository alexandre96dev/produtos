<?php
include_once './Controllers/ProductController.php';
include_once './Controllers/RequestController.php';

class Router
{
    private $route;
    private $productController;
    private $requestController;
    public function __construct($url)
    {
        $this->route = $url;
        $this->productController = new ProductController();
        $this->requestController = new RequestController();
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
            case '/requests':
                $this->requestController->index();
                break;
            case '/requests/save':
                $this->requestController->create();
                break;
            case '/requests/delete':
                $this->requestController->delete();
                break;
            default:
                echo "rota não encontrada";
                break;
        }
    }
}
