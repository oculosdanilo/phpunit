<?php

namespace Tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Consulta;

    class ConsultaTeste extends TestCase
    {
        public function testConsultaNumero(){

            $consultaNumero = new Consulta(77, "22/10/2023", "10:40", "Possui");
            
            $this->assertEquals(77, $consultaNumero->getConsulta());
        }

        public function testConsultaData(){
            $consultaData = new Consulta(77, "22/10/2023", "10:40", "Possui");
            
            $this->assertEquals("22/10/2023", $consultaData->getData());
        }

        public function testConsultaHora(){
            $consultaHora = new Consulta(77, "22/10/2023", "10:40", "Possui");
            
            $this->assertEquals("10:40", $consultaHora->getHora());
        }

    
        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetConsultaNumero(){
            $consultaNumero = new Consulta(77, "22/10/2023", "10:40", "Possui");
            $consultaNumero->setConsulta(66);
            $this->assertEquals(66, $consultaNumero->getConsulta());
        }

        public function testSetConsultaData(){
            $consultaData = new Consulta(77, "22/10/2023", "10:40", "Possui");
            $consultaData->setData("13/11/2023");
            $this->assertEquals("13/11/2023", $consultaData->getData());
        }

        public function testSetConsultaHora(){
            $consultaHora = new Consulta(77, "22/10/2023", "10:40", "Possui");
            $consultaHora->setHora("13:45");
            $this->assertEquals("13:45", $consultaHora->getHora());
        }

 
    }

?>