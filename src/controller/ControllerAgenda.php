<?php

include('../model/Agendamento.php');
include('../model/AgendamentoDAO.php');

$agendamentoDAO = new AgendamentoDAO();

if(isset($_POST['agendar'])){
    $agendamento = new Agendamento(0, $_POST['paciente'], $_POST['turno'], $_POST['especialista'],
        $_POST['data'], $_POST['motivo']);
    $agendamentoDAO->inserir($agendamento->getPaciente(), $agendamento->getTurno(),
        $agendamento->getEspecialista(), $agendamento->getData(),
        $agendamento->getMotivo());
}

if (isset($_POST['botao_excluir'])) {
    $agendamentoDAO->excluir($_POST['id_excluir']);
}

if (isset($_POST['sair'])) {
    session_start();
    session_destroy();
    unset( $_SESSION );
    header('location:../view/login.html');
}