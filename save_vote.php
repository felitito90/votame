<?php

include("db.php");
//hola

if (isset($_POST)){
    $face = $_POST['face'];
    $booty = $_POST['booty'];
    $lips = $_POST['lips'];
    $boobs = $_POST['boobs'];
    $legs = $_POST['legs'];
    $foots = $_POST['foots'];
    $pussy = $_POST['pussy'];

    $sql = "INSERT INTO girl_attributes (face, lips, booty, boobs, legs, foots, pussy)
    VALUES (". $face . ",". $lips . ",". $booty .",". $boobs . ",". $legs . ", ". $foots . ", ". $pussy . ")";
    
    if ($con->query($sql)) {
        echo "Se ha guardado el voto";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

?>