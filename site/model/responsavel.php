<?php 
class responsavel{
    //atributos
    public $nome;
    public $email;
    public $telefone;
    public $cpf;

    public function __construct($nome,$email,$telefone,$cpf) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cpf = $cpf

    }

    function cadastrar_responsa($nome,$email,$telefone,$cpf){
        $pdo = Database::conexao();
        $sql = "INSERT INTO responsavel (nome,email,telefone,cpf) VALUES ($nome,$email,$telefone,$cpf)";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return TRUE
    }
}





?>