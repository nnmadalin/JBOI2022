<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN =  JBOI - 2020</title>
        <link rel="stylesheet" href="../../admin/styles/index.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
       
        <form class="addnews" method="get" action="../../admin/addnews.php" style = "margin-bottom:150px">
            <label class="label">Titlu: </label><br>
            <input type="text" id="titlu" class="titlu" name="titlu"><br><br>
            <label class="label">Descriere: </label><br>
            <textarea id="descriere" class = "descriere" name="descriere" rows="4" cols="50"></textarea><br>
            <input class = "btn" type = "submit">
        </form>
       
    </body>
</html>
<?php
    if (isset($_COOKIE["conn"]) && $_COOKIE["conn"] == " ")
    {

    }
    else
        header('Location: ../../admin/login.php?valid=false');
?>
