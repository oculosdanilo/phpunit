<?php


namespace app\libraries;

class Medico
{
  private string $nomeMedico;
  private int $telefoneMedico;
  private string $enderecoMedico;
  private string $crm;
  private array $consultasMedico;
  private array $especialidadesMedico;

  public function __construct(string $nomeMedico, float $telefoneMedico, string $enderecoMedico, string $crm, array $consultasMedico, array $especialidadesMedico)
  {
    $this->nomeMedico = $nomeMedico;
    $this->telefoneMedico = $telefoneMedico;
    $this->enderecoMedico = $enderecoMedico;
    $this->crm = $crm;
    $this->especialidadesMedico = $especialidadesMedico;
    $this->consultasMedico = $consultasMedico;
  }

  public function setNome($nomeMedico)
  {
    $this->nomeMedico = $nomeMedico;
  }

  public function getNome()
  {
    return $this->nomeMedico;
  }

  public function setTelefone($telefoneMedico)
  {
    $this->telefoneMedico = $telefoneMedico;
  }

  public function getTelefone()
  {
    return $this->telefoneMedico;
  }

  public function setEndereco($enderecoMedico)
  {
    $this->enderecoMedico = $enderecoMedico;
  }

  public function getEndereco()
  {
    return $this->enderecoMedico;
  }

  public function setCrm($crm)
  {
    $this->crm = $crm;
  }

  public function getCrm()
  {
    return $this->crm;
  }

  public function getConsultas()
  {
    return $this->consultasMedico;
  }

  public function setConsultas($consultasMedico)
  {
    $this->consultasMedico = $consultasMedico;
  }

  public function getEspecialidades()
  {
    return $this->especialidadesMedico;
  }

  public function setEspecialidades($especialidadesMedico)
  {
    $this->especialidadesMedico = $especialidadesMedico;
  }
}




?>