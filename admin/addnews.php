<?php
    if (isset($_COOKIE["conn"]) && $_COOKIE["conn"] == " ")
    {

    }
    else
        header('Location: ../../admin/login.php?valid=false');
    $conn = new mysqli("localhost", "", "", "");
    $titlu = $_GET["titlu"];
    $descriere = $_GET["descriere"];
    $sql = "INSERT INTO news  (titlu, descriere) VALUES ('$titlu', '$descriere')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    header("Location: ../../news.php");
   
?>