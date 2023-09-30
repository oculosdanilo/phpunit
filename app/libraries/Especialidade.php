<?php
namespace app\libraries;

class Especialidade
{
  private string $nomeEspecialidade;
  private float $numeroRegistro;
  private string $publicoAlvo;



  public function __construct(string $nomeEspecialidade, float $numeroRegistro, string $publicoAlvo)
  {
    $this->nomeEspecialidade = $nomeEspecialidade;
    $this->numeroRegistro = $numeroRegistro;
    $this->publicoAlvo = $publicoAlvo;

  }

  public function setEspecialidade($nomeEspecialidade)
  {
    $this->nomeEspecialidade = $nomeEspecialidade;
  }

  public function getEspecialidade()
  {
    return $this->nomeEspecialidade;
  }

  public function setRegistro($numeroRegistro)
  {
    $this->numeroRegistro = $numeroRegistro;
  }

  public function getRegistro()
  {
    return $this->numeroRegistro;
  }

  public function setPublico($publicoAlvo)
  {
    $this->publicoAlvo = $publicoAlvo;
  }

  public function getPublico()
  {
    return $this->publicoAlvo;
  }

}

// $especialidadePublico = new Especialidade("Clinico Geral", 90876, "Adulto");

// var_dump( $especialidadePublico);

?>