<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/js_index.js"></script>
        <link rel="stylesheet" href="../../admin/styles/login.css">
        <title>Admin - JBOI</title>
    </head>
    <body>
        <form class = "form_login" action="../../admin/auth" method="get">
            <h1>Buna ziua!</h1>
            <h3 >Va rugam sa introduceti datele de conectare.</h3>
            <label class = "label_email">Nume&nbsp</label>
            <input type="text" placeholder="Introdu email" class = "input_email" name = "input_email">
            <br><br><br>
            <label class = "label_pass">Parola</label>
            <input type="password" placeholder="Introdu parola" class = "input_pass" name = "input_pass">
            <br><br>
            <button class="btn_login">Autentifica</button>
            <?php
                error_reporting(E_ERROR | E_PARSE);
                if ($_GET['valid']== "false")
                {
                    echo "<label style='font-size: 20px; padding-left:10px; color: white;'>Email si/sau parola gresita!</label>";
                }

            ?>
        </form>
    </body>
</html>
