<?php

require("../classes/functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    
    $db = new Database();

    $db->query("INSERT INTO `rollercoasters` (`id`,
                                       `nameRollercoaster`,
                                       `nameAmusementPark`,
                                       `country`,
                                       `topspeed`,
                                       `height`)
                    VALUES             (`id`,
                                       `nameRollercoaster`,
                                       `nameAmusementPark`,
                                       `country`,
                                       `topspeed`,
                                       `height`)");

        $db->bind(':id', NULL, PDO::PARAM_INT);
        $db->bind(':nameRollerCoaster', $_POST['nameRollerCoaster'], PDO:: PARAM_STR);
        $db->bind(':nameAmusementPark', $_POST['nameAmusementPark'], PDO:: PARAM_STR);
        $db->bind(':country', $_POST['country'], PDO:: PARAM_STR);
        $db->bind(':topspeed', $_POST['topspeed'], PDO:: PARAM_INT);
        $db->bind(':height', $_POST['height'], PDO:: PARAM_INT);

        $db->execute();

        header("location: ./index.php");


} else{
    echo "Deze Array wordt niet in behandeling genomen";
}
