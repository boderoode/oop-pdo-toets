<?php

require("./functions.php");


//Het object

$teacher = new Teacher("Appie","de","Kaaskop","NLB738937982","Leraar",4000, 10);
//var_dump($teacher);
echo "<hr>";

echo $teacher->exposeMyInfo();

$teacher1 = new Teacher("Bo","de","Boer","NLB738937982","Leraar",4000, 25);

echo "<hr>";

echo $teacher1->exposeMyInfo();

echo "<hr>";

$teacher2 = new Teacher("Henk","de","Straatte","NLB738937982","Professor",1200,40 );

echo $teacher2->exposeMyInfo();

echo "<hr>";
