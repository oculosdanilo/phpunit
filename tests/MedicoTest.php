<?php

namespace Tests;

use app\libraries\Agendamento;
use app\libraries\Consulta;
use app\libraries\Especialidade;
use PHPUnit\Framework\TestCase;
use app\libraries\Medico;

class MedicoTeste extends TestCase
{
  public function testMedicoNome()
  {
    $medicoNome = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));

    $this->assertEquals("Willian Ferrero", $medicoNome->getNome());
  }

  public function testMedicoTelefone()
  {
    $medicoTelefone = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));

    $this->assertEquals(11956238745, $medicoTelefone->getTelefone());
  }

  public function testMedicoEndereco()
  {
    $medicoEndereco = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));

    $this->assertEquals("Castelo Branco", $medicoEndereco->getEndereco());
  }

  public function testMedicoCrm()
  {
    $medicoCrm = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));

    $this->assertEquals(12345, $medicoCrm->getCrm());
  }

  public function testMedicoConsultas()
  {
    $medicoConsultas = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));

    $this->assertEquals(array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), $medicoConsultas->getConsultas());
  }

  public function testMedicoEspecialidades()
  {
    $medicoEsp = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));

    $this->assertEquals(array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")), $medicoEsp->getEspecialidades());
  }

  public function testVerificarTrue()
  {
    $this->assertTrue(true);
  }

  public function testVerificarFalse()
  {
    $this->assertFalse(false);
  }

  public function testSetMedicoNome()
  {
    $medicoNome = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));
    $medicoNome->setNome("Raimundo Silva");
    $this->assertEquals("Raimundo Silva", $medicoNome->getNome());
  }

  public function testSetMedicoTelefone()
  {
    $medicoTelefone = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));
    $medicoTelefone->setTelefone(1398099234);
    $this->assertEquals(1398099234, $medicoTelefone->getTelefone());
  }

  public function testSetMedicoEndereco()
  {
    $medicoEndereco = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));
    $medicoEndereco->setEndereco("Avenida Brasil");
    $this->assertEquals("Avenida Brasil", $medicoEndereco->getEndereco());
  }

  public function testSetMedicoCrm()
  {
    $medicoCrm = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));
    $medicoCrm->setCrm(69246);
    $this->assertEquals(69246, $medicoCrm->getCrm());
  }

  public function testSetMedicoConsultas()
  {
    $medicoConsultas = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));
    $medicoConsultas->setConsultas(array(new Consulta(3, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(4, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))));
    $this->assertEquals(array(new Consulta(3, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(4, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), $medicoConsultas->getConsultas());
  }

  public function testSetMedicoEspecialidades()
  {
    $medicoEsp = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345, array(new Consulta(1, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim")), new Consulta(2, "sim", "sim", new Agendamento(152, "sim", "sim", "sim", "sim"))), array(new Especialidade("exato", 123, "exato"), new Especialidade("sim", 123, "sim")));
    $medicoEsp->setEspecialidades(array(new Especialidade("sim", 123, "sim"), new Especialidade("exato", 123, "exato")));
    $this->assertEquals(array(new Especialidade("sim", 123, "sim"), new Especialidade("exato", 123, "exato")), $medicoEsp->getEspecialidades());
  }
}

?>