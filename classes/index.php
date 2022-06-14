<?php

require("./functions.php");


// Dit is een object van de class person
 $person = new Person("Johan", "van de", "Groot", "289645");
 $person->__set("bankaccountnumber", "500000");
 echo $person->sayHello();
 echo "Mijn bankrekening is: " . $person->__get("bankaccountnumber", "45000");
 
 
echo "<hr>";
$person1 = new Person("Beemster", "van", "Broekhuis", "356890");
echo $person1->sayHello();


echo "<hr>";
$person2 = new Person("Gerard", "van", "Kaaskop", "136902");
echo $person2->sayHello();

echo "<hr>";
$person3 = new Person("Jean-paul", "van", "Wittevlag", "326709");
echo $person3->sayHello();

echo "<hr>";
$person4 = new Person("Jean-claude", "van", "damme", "324905");
echo $person4->sayHello();