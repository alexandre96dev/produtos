<?php
include_once 'Config/Database.php';
include_once 'Models/Product.php';
class ProductRepository extends Database
{
    public function getAll()
    {
        $sql = "SELECT * FROM produtos";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function findById($id)
    {
    }
    public function create(Product $product)
    {
        $sql = "INSERT INTO produtos (descricao, valor_venda, estoque) VALUES (?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $product->getDescription());
        $stmt->bindValue(2, $product->getSellingPrice());
        $stmt->bindValue(3, $product->getStock());

        $stmt->execute();
    }
    public function updateProduct(Product $product)
    {
    }
    public function deleteProduct($id)
    {
        $sql = "UPDATE produtos
                SET ativo = 'I'
                WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
