<?php


//  Deze functie laadt automatisch de classes die gebruikt gaat worden.


function load_class($classname)





{

    //  bouw het pad op naar het bestand waar de class in zit.
    $pathToFile = '../classes/' . $classname . '.php';
   
    if(file_exists($pathToFile))
    {
        // Als het bestand met de class erin bestaat, laadt hem dan op de pagina.
        require($pathToFile);
    } 
    else
     {
        //  Als het bestand niet bestaat komt de onderstaande melding.
       echo "Class is niet gevonden";
     }
}

spl_autoload_register('load_class');