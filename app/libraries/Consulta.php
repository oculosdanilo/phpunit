<?php

namespace app\libraries;

class Consulta
{
  private int $numeroConsulta;
  private string $dataConsulta;
  private string $horaConsulta;
  private Agendamento $agendamentoConsulta;

  public function __construct(int $numeroConsulta, string $dataConsulta, string $horaConsulta, Agendamento $agendamentoConsulta)
  {
    $this->numeroConsulta = $numeroConsulta;
    $this->dataConsulta = $dataConsulta;
    $this->horaConsulta = $horaConsulta;
    $this->agendamentoConsulta = $agendamentoConsulta;
  }

  public function setConsulta($numeroConsulta)
  {
    $this->numeroConsulta = $numeroConsulta;
  }

  public function getConsulta()
  {
    return $this->numeroConsulta;
  }

  public function setData($dataConsulta)
  {
    $this->dataConsulta = $dataConsulta;
  }

  public function getData()
  {
    return $this->dataConsulta;
  }


  public function setHora($horaConsulta)
  {
    $this->horaConsulta = $horaConsulta;
  }

  public function getHora()
  {
    return $this->horaConsulta;
  }

  public function setAgendamento($agendamentoConsulta)
  {
    $this->agendamentoConsulta = $agendamentoConsulta;
  }

  public function getAgendamento()
  {
    return $this->agendamentoConsulta;
  }

}

?>