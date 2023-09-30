<?php

namespace Tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Agendamento;

    class AgendamentoTeste extends TestCase
    {
        public function testAgendamentoNumero(){
            $AgendamentoNumero = new Agendamento(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            
            $this->assertEquals(130, $AgendamentoNumero->getNumero());
        }

        public function testAgendamentoData(){
            $AgendamentoData = new Agendamento(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            
            $this->assertEquals("10/12/2023", $AgendamentoData->getData());
        }

        public function testAgendamentoHora(){
            $AgendamentoHora = new Agendamento(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            
            $this->assertEquals("12:20", $AgendamentoHora->getHora());
        }

        public function testAgendamentoQueixa(){
            $AgendamentoQueixa = new Agendamento(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            
            $this->assertEquals("Não Tem", $AgendamentoQueixa->getQueixa());
        }

        public function testAgendamentoGravidade(){
            $AgendamentoGravidade = new Agendamento(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            
            $this->assertEquals("Não Tem", $AgendamentoGravidade->getGravidade());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetAgendamentoNumero(){
            $AgendamentoNumero = new Agendamento(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            $AgendamentoNumero->setNumero(145);
            $this->assertEquals(145, $AgendamentoNumero->getNumero());
        }

        public function testSetAgendamentoData(){
            $AgendamentoData = new Agendamento(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            $AgendamentoData->setData("02/01/2024");
            $this->assertEquals("02/01/2024", $AgendamentoData->getData());
        }

        public function testSetAgendamentoHora(){
            $AgendamentoHora = new Agendamento(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            $AgendamentoHora->setHora("20:50");
            $this->assertEquals("20:50", $AgendamentoHora->getHora());
        }

        public function testSetAgendamentoQueixa(){
            $AgendamentoQueixa = new Agendamento(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            $AgendamentoQueixa->setQueixa("Dor de Cabeça");
            $this->assertEquals("Dor de Cabeça", $AgendamentoQueixa->getQueixa());
        }

        public function testSetAgendamentoGravidade(){
            $AgendamentoGravidade = new Agendamento(130, "10/12/2023", "12:20", "Não Tem", "Não Tem");
            $AgendamentoGravidade->setGravidade("Média");
            $this->assertEquals("Média", $AgendamentoGravidade->getGravidade());
        }
 
    }

?>