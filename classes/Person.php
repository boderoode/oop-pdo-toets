<?php

/**
 * Dit is een class Person
 */

class Person
{
     // De properties, fields, instance variables
     protected $firstname = "Bo";
     protected $infix = "de";
     protected $lastname = "Roode";
     protected $bankaccountnumber;
     protected $phonenumber;

     //dit is een set functie voor bankaccountnumber
     public function __set($property, $value)

     {
          if(property_exists($this, $property))
          {
               $this->$property = $value;
          }
     }


     //dit is een get functie voor bankaccountnumber
     public function __get($property)
     {
         if(property_exists($this, $property))
         {
             return $this->$property;
         }
          
     }





     //dit is de constructor
     public function __construct($firstname, $infix, $lastname, $bankaccountnumber, $phonenumber = null)
     {
          $this->firstname = $firstname;
          $this->infix = $infix;
          $this->lastname = $lastname;
          $this->bankaccountnumber = $bankaccountnumber;
          $this->phonenumber = $phonenumber;
     }

     //dit is een method
     public function sayHello()
     {
          return "Groetjes van " . $this->firstname . " " . $this->infix . " " . $this->lastname . " " . $this->bankaccountnumber . " ";
     }
}
