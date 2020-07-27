<?php

class Agendamento
{

    private $id;
    private $paciente;
    private $turno;
    private $especialista;
    private $data;
    private $motivo;

    function __construct($id, $paciente, $turno, $especialista, $data, $motivo)
    {
        $this->id = $id;
        $this->paciente = $paciente;
        $this->turno = $turno;
        $this->especialista = $especialista;
        $this->data = $data;
        $this->motivo = $motivo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPaciente()
    {
        return $this->paciente;
    }

    public function getTurno()
    {
        return $this->turno;
    }

    public function getEspecialista()
    {
        return $this->especialista;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getMotivo()
    {
        return $this->motivo;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;
    }

    public function setTurno($turno)
    {
        $this->turno = $turno;
    }

    public function setEspecialista($especialista)
    {
        $this->especialista = $especialista;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    }
}