<?php
include_once 'Config/Database.php';
class ProductRepository extends Database
{
    public function getAll()
    {
        $sql = "SELECT * FROM produtos ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function findById($id)
    {
    }
    public function create(Product $product)
    {
    }
    public function updateProduct(Product $product)
    {
    }
    public function deleteProduct($id)
    {
    }
}
