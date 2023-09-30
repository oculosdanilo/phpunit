<?php
namespace Tests;

use app\libraries\Agendamento;
use app\libraries\Consulta;
use PHPUnit\Framework\TestCase;
use app\libraries\Paciente;


class PacienteTeste extends TestCase
{

  public function testPacienteNome()
  {
    $pacienteNome = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));

    $this->assertEquals("Fernanda Silva", $pacienteNome->getNome());
  }

  public function testPacienteEndereco()
  {
    $pacienteEndereco = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));

    $this->assertEquals("Rua do Pastel", $pacienteEndereco->getEndereco());
  }

  public function testPacienteTelefone()
  {
    $pacienteTelefone = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));

    $this->assertEquals(11935849635, $pacienteTelefone->getTelefone());
  }


  public function testPacienteBeneficiario()
  {
    $pacienteBeneficiario = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));

    $this->assertEquals(258741, $pacienteBeneficiario->getBeneficiario());
  }

  public function testPacienteDoencas()
  {
    $pacienteDoencas = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));

    $this->assertEquals("Covid-19", $pacienteDoencas->getDoencas());
  }

  public function testPacienteRemedio()
  {
    $pacienteRemedio = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));

    $this->assertEquals("Vitaminas", $pacienteRemedio->getRemedio());
  }

  public function testPacienteConsultas()
  {
    $pacienteConsulta = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));

    $this->assertEquals(array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), $pacienteConsulta->getConsultas());
  }

  public function testVerificarTrue()
  {
    $this->assertTrue(true);
  }

  public function testVerificarFalse()
  {
    $this->assertFalse(false);
  }

  public function testSetPacienteNome()
  {
    $pacienteNome = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));
    $pacienteNome->setNome("Silvio Santos");
    $this->assertEquals("Silvio Santos", $pacienteNome->getNome());
  }

  public function testSetPacienteEndereco()
  {
    $pacienteEndereco = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));
    $pacienteEndereco->setEndereco("Rua da Alegria");
    $this->assertEquals("Rua da Alegria", $pacienteEndereco->getEndereco());
  }

  public function testSetPacienteTelefone()
  {
    $pacienteTelefone = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));
    $pacienteTelefone->setTelefone(11958743256);
    $this->assertEquals(11958743256, $pacienteTelefone->getTelefone());
  }

  public function testSetPacienteBeneficiario()
  {
    $pacienteBeneficiario = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));
    $pacienteBeneficiario->setBeneficiario(147852);
    $this->assertEquals(147852, $pacienteBeneficiario->getBeneficiario());
  }

  public function testSetDoencas()
  {
    $pacienteDoencas = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));
    $pacienteDoencas->setDoencas("Catapora");
    $this->assertEquals("Catapora", $pacienteDoencas->getDoencas());
  }

  public function testSetRemedio()
  {
    $pacienteRemedio = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));
    $pacienteRemedio->setRemedio("Loratadina");
    $this->assertEquals("Loratadina", $pacienteRemedio->getRemedio());
  }

  public function testSetConsultas()
  {
    $pacienteConsultas = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas", array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));
    $pacienteConsultas->setConsultas(array(new Consulta(3, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(4, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));
    $this->assertEquals(array(new Consulta(3, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(4, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), $pacienteConsultas->getConsultas());
  }
}
?>