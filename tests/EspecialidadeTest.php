<?php

namespace Tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Especialidade;

    class EspecialidadeTeste extends TestCase
    {
        public function testEspecialidadeNome(){
            $especialidadeNome = new Especialidade("Clinico Geral", 90876, "Adulto");
            
            $this->assertEquals("Clinico Geral", $especialidadeNome->getEspecialidade());
        }

        public function testEspecialidadeRegistro(){
            $especialidadeRegistro = new Especialidade("Clinico Geral", 90876, "Adulto");
            
            $this->assertEquals(90876, $especialidadeRegistro->getRegistro());
        }

        public function testEspecialidadePublico(){
            $especialidadePublico = new Especialidade("Clinico Geral", 90876, "Adulto");
            
            $this->assertEquals("Adulto", $especialidadePublico->getPublico());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetEspecialidadeNome(){
            $especialidadeNome = new Especialidade("Clinico Geral", 90876, "Adulto");
            $especialidadeNome->setEspecialidade("Cirurgiao Geral");
            $this->assertEquals("Cirurgiao Geral", $especialidadeNome->getEspecialidade());
        }

        public function testSetRegistro(){
            $especialidadeRegistro = new Especialidade("Clinico Geral", 90876, "Adulto");
            $especialidadeRegistro->SetRegistro(56789);
            $this->assertEquals(56789, $especialidadeRegistro->getRegistro());
        }

        public function testSetEspecialidadePublico(){
            $especialidadePublico = new Especialidade("Clinico Geral", 90876, "Adulto");
            $especialidadePublico->setPublico("Todos");
            $this->assertEquals("Todos", $especialidadePublico->getPublico());
        }
    }

?>