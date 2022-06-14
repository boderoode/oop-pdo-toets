<?php

//Dit is de Teacher class

class teacher extends Person
{

    //properties, fields
    private $functie;
    private $salary;
    private $yearsInService;


    //getters and setters


    //constructor
    public function __construct($firstname, $infix, $lastname,  $bankaccountnumber, $functie, $salary, $yearsInService)
    {
        parent::__construct($firstname, $infix, $lastname, $bankaccountnumber, $yearsInService);

        $this->functie = $functie;
        $this->salary = $salary;
        $this->yearsInService = $yearsInService;
    }

    //methods

    public function exposeMyInfo()
    {
        return "Mijn naam is: " .  $this->firstname . " " .  
                                   $this->infix . " " .  
                                   $this->lastname . " Mijn salaris is: "  .  
                                   $this->salary . " Mijn functie is: " .  
                                   $this->functie . " Mijn bankrekeningnummer is: " . 
                                   $this->bankaccountnumber . " Ik ben " . 
                                   $this->yearsInService . " jaren in dienst";
    }
}
