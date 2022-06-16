<?php
    $email = $_GET['input_email'];
    $parola = $_GET['input_pass'];
    echo $email;

    /*
    $cript = md5($parola);
    if (isset($email))
    {
        $conn = new mysqli("localhost", "root", "", "catalog");    
        $conn->connect_error;
        $sql = "select * from user where Email = '$email' and Parola = '$cript' and Verificat = 1";
        $res = mysqli_query($conn, $sql);
        if($res->num_rows > 0){
            if($row = $res->fetch_assoc()) {
                $_SESSION['email'] = $row["Email"];
                $_SESSION['nume'] = $row["NumePrenume"];
                $_SESSION['tip'] = "2";
                header('Location: ../../admin.php');
            }
           
        }
        else
        {
            header('Location: ../../login.php?valid=false');
        }
        
    }*/
    if ($email == "admin" && $parola == " ")
    {
        $_SESSION['tip'] = "1";
        setcookie("conn",   $parola, time() + 2 * 24 * 60 * 60);
        header('Location: ../../admin/index');
    }
    else
    {
        header('Location: ../../admin/login.php?valid=false');
    }   
?>          