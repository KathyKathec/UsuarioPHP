<?php
class Usuario {

    private $id;
    private $nome;
    private $email;
    private $senha;


public function getId(){
    return $this->id;
}

public function setId($valor){
    $this->id=$valor;
}

public function getNome(){
    return $this->nome;
}
public function setNome($valor){
    $this->nome=$valor;
}

public function getEmail(){
    return $this->email;
}
public function setEmail($valor){
    $this->email=$valor;
}


public function getSenha(){
    return $this->senha;
}
public function setSenha($valor){
    $this->senha=$valor;
}



}

?>