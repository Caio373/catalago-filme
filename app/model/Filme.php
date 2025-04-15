<?php 
require_once __DIR__ ."\..\config\database.php";
// Class que representa a tabela filme no projeto

class Filme {
    private $tabela = "filme";
    private $pdo;

    //colunas da tabela
    public $nome;
    public $ano;
    public $descricao;
    public $img;

    public function __construct() {
        global $pdo;

        $this->pdo = $pdo;
}
    public function findAll() {
        
        $query = "SELECT * FROM $this->tabela ORDER BY id DESC";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS,__CLASS__);

        return $stmt->fetchAll();

}   

    //Metodo para Buscar Id
    public function findById($id) {
        $query = "SELECT * FROM $this->tabela WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS,__CLASS__);

        return $stmt->fetch();
    }

    public function excluir($id) {
        $query = "DELETE FROM $this->tabela WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->rowCount() > 0;

    }

    public function cadastro($nome, $ano, $descricao, $img){
        $query = "INSERT INTO $this->tabela (nome, ano, descricao,img) VALUES (:nome, :ano, :descricao, :img)";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":ano", $ano);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":img", $img);

        $stmt->execute();


        return $stmt->rowCount() > 0;

    }

    public function editar($id,$nome, $ano, $descricao, $img){
        $query = "UPDATE $this->tabela SET nome = :nome, ano = :ano, descricao = :descricao, img = :img where id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam("id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":ano", $ano);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":img", $img);

        $stmt->execute();


        return $stmt->rowCount() > 0;
    }
}