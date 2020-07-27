<?php

class Usuario{
    private $id;
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $email;
    private $senha;
    private $endereco;
    private $cidade;
    private $estado;
    private $cep;
    private $numContato;
    
    function __construct($id ,$nome, $sobrenome, $dataNascimento, $email, $senha, $endereco, $cidade, $estado, $cep, $numContato) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->dataNascimento = $dataNascimento;
        $this->email = $email;
        $this->senha = $senha;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->numContato = $numContato;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }
    
    public function getSobrenome() {
        return $this->sobrenome;
    }
    
    public function getDataNascimento() {
        return $this->dataNascimento;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    
    public function getEndereco() {
        return $this->endereco;
    }
    
    public function getCidade() {
        return $this->cidade;
    }
    
    public function getEstado() {
        return $this->estado;
    }
    
    public function getCep() {
        return $this->cep;
    }
    
    public function getNumContato() {
        return $this->numContato;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setNome($nome): void {
        $this->nome = $nome;
    }
    
    public function setSobrenome($sobrenome): void {
        $this->sobrenome = $sobrenome;
    }
    
    public function setDataNascimento($dataNascimento): void {
        $this->dataNascimento = $dataNascimento;
    }
    
    public function setEmail($email): void {
        $this->email = $email;
    }
    
    public function setSenha($senha): void {
        $this->senha = $senha;
    }
    
    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }
    
    public function setCidade($cidade): void {
        $this->cidade = $cidade;
    }
    
    public function setEstado($estado): void {
        $this->estado = $estado;
    }
    
    public function setCep($cep): void {
        $this->cep = $cep;
    }
    
    public function setNumContato($numContato): void {
        $this->numContato = $numContato;
    }
}

