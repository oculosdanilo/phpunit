<?php
    namespace Tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Paciente;


    class PacienteTeste extends TestCase
    {
        
        public function testPacienteNome()
        {
            $pacienteNome = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            
            $this->assertEquals("Fernanda Silva", $pacienteNome->getNome());
        }

        public function testPacienteEndereco(){
            $pacienteEndereco = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            
            $this->assertEquals("Rua do Pastel", $pacienteEndereco->getEndereco());
        }

        public function testPacienteTelefone(){
            $pacienteTelefone = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            
            $this->assertEquals(11935849635, $pacienteTelefone->getTelefone());
        }

        
        public function testPacienteBeneficiario(){
            $pacienteBeneficiario = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            
            $this->assertEquals(258741, $pacienteBeneficiario->getBeneficiario());
        }

        public function testPacienteDoencas(){
            $pacienteDoencas = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            
            $this->assertEquals("Covid-19", $pacienteDoencas->getDoencas());
        }
        
        public function testPacienteRemedio(){
            $pacienteRemedio = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            
            $this->assertEquals("Vitaminas", $pacienteRemedio->getRemedio());
        }




        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetPacienteNome(){
            $pacienteNome = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            $pacienteNome->setNome("Silvio Santos");
            $this->assertEquals("Silvio Santos", $pacienteNome->getNome());
        }

        public function testSetPacienteEndereco()
        {
            $pacienteEndereco = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            $pacienteEndereco->setEndereco("Rua da Alegria");
            $this->assertEquals("Rua da Alegria", $pacienteEndereco->getEndereco());
        }

        public function testSetPacienteTelefone()
        {
            $pacienteTelefone = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            $pacienteTelefone->setTelefone(11958743256);
            $this->assertEquals(11958743256, $pacienteTelefone->getTelefone());
        }

        public function testSetPacienteBeneficiario()
        {
            $pacienteBeneficiario = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            $pacienteBeneficiario->setBeneficiario(147852);
            $this->assertEquals(147852, $pacienteBeneficiario->getBeneficiario());
        }

        public function testSetDoencas()
        {
            $pacienteDoencas = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            $pacienteDoencas->setDoencas("Catapora");
            $this->assertEquals("Catapora", $pacienteDoencas->getDoencas());
        }

        public function testSetRemedio()
        {
            $pacienteRemedio = new Paciente("Fernanda Silva", "Rua do Pastel", 11935849635, 258741, "Covid-19", "Vitaminas");
            $pacienteRemedio->setRemedio("Loratadina");
            $this->assertEquals("Loratadina", $pacienteRemedio->getRemedio());
        }

    }
?>

