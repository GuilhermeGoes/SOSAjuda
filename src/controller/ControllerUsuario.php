<?php

include ('../model/Usuario.php');
include ('../model/UsuarioDAO.php');

$usuarioDAO = new UsuarioDAO;

if (isset($_POST['botao_cadastro'])) {
    //$sos_ajuda_cadastro = $_POST['enviar'];
    $usuario = new Usuario(0 ,$_POST['nome'], $_POST['sobrenome'], $_POST['dataNascimento'], 
                            $_POST['email'], $_POST['senha'], $_POST['endereco'], $_POST['cidade'], 
                            $_POST['estado'], $_POST['cep'], $_POST['numContato']);
    $usuarioDAO->inserir($usuario->getNome(), $usuario->getSobrenome(),
            $usuario->getDataNascimento(), $usuario->getEmail(), $usuario->getSenha(),
            $usuario->getEndereco(), $usuario->getCidade(), $usuario->getEstado(), 
            $usuario->getCep(), $usuario->getNumContato());
}

if (isset($_POST['botao_login'])) {
    $usuarioDAO->iniciar_sessao($_POST['email'], $_POST['senha']);
    
}
