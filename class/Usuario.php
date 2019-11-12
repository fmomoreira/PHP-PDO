<?php

class Usuario {

    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $telefone;

    public function getId(){
        return $this->id;
    }
    
    public function setId($value){
        $this->id = $value;

    }

    
    public function getLogin(){
        return $this->login;
    }
    
    public function setLogin($value){
        $this->login = $value;

    }


    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($value){
        $this->nome = $value;

    }

    public function getCpf(){
        return $this->cpf;
    }
    
    public function setCpf($value){
        $this->cpf = $value;

    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($value){
        $this->email = $value;

    }

    public function getTelefone(){
        return $this->telefone;
    }
    
    public function setTelefone($value){
        $this->telefone = $value;

    }

    public function loadById($id){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM user WHERE id = :ID", array(

                ":ID"=>$id

        ));

        if (count($results) > 0){

            $row =$results[0];

            $this->setId($row['id']);
            $this->setNome($row['nome']);
            $this->setCpf($row['cpf']);
            $this->setEmail($row['email']);
            $this->setTelefone($row['telefone']);
           
        }

    }

    public function  __toString(){

        return json_encode(array(
            "id"=>$this->getId(),
            "nome"=>$this->getNome(),
            "cpf"=>$this->getCpf(),
            "email"=>$this->getEmail(),
            "telefone"=>$this->getTelefone(),




        ));
    }


}


?>

