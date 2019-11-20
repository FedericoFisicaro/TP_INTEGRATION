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
        /*� completer*/
    }
     
    
    public function testAffichageCoursAVI()
    {
        /*� completer*/
    }
    public function testInsertC()
    {
       
        /*� completer*/
        
    }
    public function testAffichageCoursAPI()
    {
        /*� completer*/
    }

   
}
