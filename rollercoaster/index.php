<?php



require('../classes/Database.php');


$db = new Database();

$db->query("SELECT `id`, `nameRollerCoaster`, `nameAmusementPark`, `country`, `topspeed`, `height` from `rollercoasters`");

//var_dump($db->selectAll());

$rollercoasters = $db->selectAll();


$tbody = "";
foreach($rollercoasters as $key => $value)
{
    $tbody .="<tr>
                    <td>" . $value->id . "</td>
                    <td>" . $value->nameRollerCoaster . "</td>
                    <td>" . $value->nameAmusementPark . "</td>
                    <td>" . $value->country . "</td>
                    <td>" . $value->topspeed . "</td>
                    <td>" . $value->height . "</td>
    
    </tr>";
}


?>

 <style>

table, th, td, tr {
  border-collapse: collapse;
  border: 1px solid black;
  
}

</style>

<a href="./create.php">Voeg een rollercoaster toe</a>


<table>
<thead>
    <th>id</th>
    <th>Achtbaan</th>
    <th>Pretpark</th>
    <th>Land</th>
    <th>Snelheid (km/u)</th>
    <th>Hoogte (m)</th>
</thead>
<tbody>
     <?= $tbody; ?>
</tbody>




</table>