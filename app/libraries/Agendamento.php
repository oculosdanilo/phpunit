<?php

namespace app\libraries;

class Agendamento
{
  private int $numeroAgendamento;
  private string $dataAgendamento;
  private string $horaAgendamento;
  private string $queixa;
  private string $gravidade;


  public function __construct(float $numeroAgendamento, string $dataAgendamento, string $horaAgendamento, string $queixa, string $gravidade)
  {
    $this->numeroAgendamento = $numeroAgendamento;
    $this->dataAgendamento = $dataAgendamento;
    $this->horaAgendamento = $horaAgendamento;
    $this->queixa = $queixa;
    $this->gravidade = $gravidade;
  }

  public function setNumero($numeroAgendamento)
  {
    $this->numeroAgendamento = $numeroAgendamento;
  }

  public function getNumero()
  {
    return $this->numeroAgendamento;
  }

  public function setData($dataAgendamento)
  {
    $this->dataAgendamento = $dataAgendamento;
  }

  public function getData()
  {
    return $this->dataAgendamento;
  }

  public function setHora($horaAgendamento)
  {
    $this->horaAgendamento = $horaAgendamento;
  }

  public function getHora()
  {
    return $this->horaAgendamento;
  }

  public function setQueixa($queixa)
  {
    $this->queixa = $queixa;
  }

  public function getQueixa()
  {
    return $this->queixa;
  }

  public function setGravidade($gravidade)
  {
    $this->gravidade = $gravidade;
  }

  public function getGravidade()
  {
    return $this->gravidade;
  }

}

?>