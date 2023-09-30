<?php 

namespace Tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Medico;

    class MedicoTeste extends TestCase
    {
        public function testMedicoNome(){
            $medicoNome = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345);
            
            $this->assertEquals("Willian Ferrero", $medicoNome->getNome());
        }

        public function testMedicoTelefone(){
            $medicoTelefone = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345);
            
            $this->assertEquals(11956238745, $medicoTelefone->getTelefone());
        }

        public function testMedicoEndereco(){
            $medicoEndereco = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345);
            
            $this->assertEquals("Castelo Branco", $medicoEndereco->getEndereco());
        }

        public function testMedicoCrm(){
            $medicoCrm = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345);
            
            $this->assertEquals(12345, $medicoCrm->getCrm());
        }


        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetMedicoNome(){
            $medicoNome = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345);
            $medicoNome->setNome("Raimundo Silva");
            $this->assertEquals("Raimundo Silva", $medicoNome->getNome());
        }

        public function testSetMedicoTelefone(){
            $medicoTelefone = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345);
            $medicoTelefone->setTelefone(1398099234);
            $this->assertEquals(1398099234, $medicoTelefone->getTelefone());
        }

        public function testSetMedicoEndereco(){
            $medicoEndereco = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345);
            $medicoEndereco->setEndereco("Avenida Brasil");
            $this->assertEquals("Avenida Brasil", $medicoEndereco->getEndereco());
        }

        public function testSetMedicoCrm(){
            $medicoCrm = new Medico("Willian Ferrero", 11956238745, "Castelo Branco", 12345);
            $medicoCrm->setCrm(69246);
            $this->assertEquals(69246, $medicoCrm->getCrm());
        }

    }

?>