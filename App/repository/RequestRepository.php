<?php
include_once 'Config/Database.php';
include_once 'Models/Request.php';
class RequestRepository extends Database
{
    public function getAll()
    {
        $sql = "SELECT produtos.descricao, pedidos.* FROM pedidos
                INNER JOIN produtos
                ON produtos.id = pedidos.produto_id";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function findById($id)
    {
    }
    public function create(Request $request)
    {
        $sql = "INSERT INTO pedidos (quantidade, produto_id) VALUES (?, ?) ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $request->getQuantity());
        $stmt->bindValue(2, $request->getProductId());
        $stmt->execute();
    }
    public function updateRequest(Request $request)
    {
    }
    public function deleteRequest($id)
    {
        $sql = "UPDATE pedidos
                SET ativo = 'I'
                WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
