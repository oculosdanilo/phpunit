<?php

namespace app\libraries;

class Consulta
{
  private int $numeroConsulta;
  private string $dataConsulta;
  private string $horaConsulta;

  public function __construct(int $numeroConsulta, string $dataConsulta, string $horaConsulta)
  {
    $this->numeroConsulta = $numeroConsulta;
    $this->dataConsulta = $dataConsulta;
    $this->horaConsulta = $horaConsulta;

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

}

?>