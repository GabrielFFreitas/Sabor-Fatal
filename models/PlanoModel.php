<?php

require_once "Conexao.php";
require_once "plano.php";

class PlanoModel
{

    public $tabela = "Plano";

    public function create(Plano $c){
        try{
            $sql = "INSERT INTO $this->tabela (preco_plano, descricao_plano) VALUES (?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getPreco_Plano());
            $stmt->bindValue(2, $c->getPreco_Plano());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Plano');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id = ?");
        $stmt->bindParam(1,$id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Plano');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Plano $c){
        try{
            $sql = "UPDATE $this->tabela SET preco_plano = ?, descricao_plano = ?, WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getPreco_Plano());
            $stmt->bindValue(2, $c->getDescricao_Plano());
            $stmt->bindValue(3, $c->getId());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
