<?php

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
    public $gumballMachineInstance;
    //prof
    private $nom="XXX1";
    private $prenom="YYY1";
    private $date_naissance="1980-09-29";
    private $lieu_naissance="ZZZ1";

    private $nom2="XXX2";
    private $prenom2="YYY2";
    private $date_naissance2="1981-10-30";
    private $lieu_naissance2="ZZZ2";

    private $nom3="XXX3";
    private $prenom3="YYY3";
    private $date_naissance3="1982-12-31";
    private $lieu_naissance3="ZZZ3";
    // cours
    private $intitule="***"; //a remplir
    private $duree="***";    //a remplir
    
        
    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }
    
    public function testAffichageProfAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("Before Insertion of Professors"));
    }
    public function testInsertP()
    {
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom,$this->prenom,$this->date_naissance,$this->lieu_naissance));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom2,$this->prenom2,$this->date_naissance2,$this->lieu_naissance2));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom3,$this->prenom3,$this->date_naissance3,$this->lieu_naissance3));

        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+3,$max__id2);
    }
    public function testAffichageProfAPI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("After Insertion of Professors"));
    }
     
    
    public function testAffichageCoursAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageCours("Before Insertion of Coursus"));
    }
    public function testInsertC()
    {
       
        $max__id1=$this->gumballMachineInstance->GetLastIDC();

        $this->assertEquals("good job",$this->gumballMachineInstance->InsertC("IOT","10",$this->gumballMachineInstance->GetIdP("XXX2","YYY2")));
        $this->assertEquals("good job",$this->gumballMachineInstance->InsertC("IA","12",$this->gumballMachineInstance->GetIdP("XXX1","YYY1")));
        $this->assertEquals("good job",$this->gumballMachineInstance->InsertC("C++","18",$this->gumballMachineInstance->GetIdP("XXX3","YYY3")));
        $this->assertEquals("good job",$this->gumballMachineInstance->InsertC("EDL","30",$this->gumballMachineInstance->GetIdP("XXX3","YYY3")));

        $max__id2=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals($max__id1+4,$max__id2);
        
    }
    public function testAffichageCoursAPI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageCours("After Insertion of Coursus"));
    }

    public function testUpdateP()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->UpdateP("3","FFE1","FFI1","1998-07-20","MMM1"));
        $this->gumballMachineInstance->AffichageProf("After Update of Professor");
    }

    public function testUpdateC()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->UpdateC("5","MecaFlot","1000",$this->gumballMachineInstance->GetIdP("XXX3","YYY3")));
        $this->gumballMachineInstance->AffichageCours("After Update of Coursus");
    }

    public function testDeleteP()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->DeleteC(4));
        $this->gumballMachineInstance->AffichageProf("After Delete of Professor");
    }

    public function testDeleteC()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->DeleteC(7));
        $this->gumballMachineInstance->AffichageCours("After Delete of Coursus");
    }
}
