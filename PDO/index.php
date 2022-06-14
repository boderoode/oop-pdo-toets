<?php



require('../classes/Database.php');


$db = new Database();

$db->query("SELECT `id`, ``, `capital`, `continent`, `population` from `country`");

//var_dump($db->selectAll());

$countries = $db->selectAll();


$tbody = "";
foreach($countries as $key => $value)
{
    $tbody .="<tr>
                    <td>" . $value->id . "</td>
                    <td>" . $value->country . "</td>
                    <td>" . $value->continent . "</td>
                    <td>" . $value->capital . "</td>
                    <td>" . $value->population . "</td>
    
    </tr>";
}


?>

 <style>

table, th, td, tr {
  border-collapse: collapse;
  border: 1px solid black;
  
}

</style>

<a href="./create.php">Voeg een Rollercoaster toe</a>


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