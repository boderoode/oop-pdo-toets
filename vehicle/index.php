<?php



require('../classes/Database.php');


$db = new Database();

$db->query("SELECT `id`, `brand`, `model`, `topspeed`, `price` from `vehicle`");


$vehicle = $db->selectAll();


$tbody = "";
foreach($vehicle as $key => $value)
{
    $tbody .="<tr>
                    <td>" . $value->brand . "</td>
                    <td>" . $value->model . "</td>
                    <td>" . $value->topspeed . "</td>
                    <td>" . $value->price . "</td>
    
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
    <th>Merk</th>
    <th>model</th>
    <th>Topsnelheid</th>
    <th>prijs</th>
</thead>
<tbody>
     <?= $tbody; ?>
</tbody>




</table>