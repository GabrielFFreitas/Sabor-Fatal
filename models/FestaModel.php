<?php

require_once "Conexao.php";
require_once "festa.php";

class FestaModel
{

    public $tabela = "Festa";

    public function create(Festa $c){
        try{
            $sql = "INSERT INTO $this->tabela (horario, data, qtd_convidados) VALUES (?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getHorario());
            $stmt->bindValue(2, $c->getData());
            $stmt->bindValue(3, $c->getQTD_Convidados());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Festa');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id = ?");
        $stmt->bindParam(1,$id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Festa');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Festa $c){
        try{
            $sql = "UPDATE $this->tabela SET horario = ?, data = ?, qtd_convidados = ? WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getHorario());
            $stmt->bindValue(2, $c->getData());
            $stmt->bindValue(3, $c->getQTD_Convidados());
            $stmt->bindValue(4, $c->getId());
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
