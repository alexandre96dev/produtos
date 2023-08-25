<?php
    class Router
    {
        private $route;

        public function __construct($url) {
            $this->route = $url;
        }

        public function switchRoute(){
            switch ($this->route) {
                case '/':
                    echo "Listagem de produtos";
                    break;
                
                default:
                    echo "rota não encontrada";
                    break;
            }
        }
    }
    