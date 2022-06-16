<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,600&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../../js/script.js"></script>
        
        <link rel="stylesheet" href="../../style/news.css">
        <link rel="stylesheet" href="../../style/navbar.css">
        <title>JBOI - 2022</title>
        <script> 
            $(function(){
            $("#navbar").load("../../include/navbar.html"); 
            });
        </script> 
    </head>
    <body oncontextmenu="return false">
        <script lang="text/javascript">
                document.onkeydown = function (e) {
                    if (event.keyCode == 123) {
                        return false;
                    }
                    if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                        return false;
                    }
                    if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                        return false;
                    }
                    if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                        return false;
                    }
                    if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                        return false;
                    }
                };
                document.onkeydown = function (e) {
                    e = e || window.event;//Get event
                    if (e.ctrlKey) {
                        var c = e.which || e.keyCode;//Get key code
                        switch (c) {
                            case 83://Block Ctrl+S
                                e.preventDefault();     
                                e.stopPropagation();
                            break;
                        }
                    }
                };
        </script>

        
        <div class = "navbar" id = "navbar"></div>

        <div class = "contain">
        <h1 style = "text-align: left; color: black; font-size: 50px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">News</h1>
            <!--
            <div class = "subcontain">
                <h3>JBOI 2022 tasks publish</h3>
                <p class = "data">
                    <i class="fa fa-calendar" style="font-size:18px"></i>
                    20 oct 2022
                </p>
                <p class = "descriere">JBOI 2022 tasks publish.... <a href="#">CLICK HERE</a></p>
            </div>
            -->
            <?php
                $conn = new mysqli("localhost", "", "", "");
                $sql = "SELECT * FROM news ORDER BY id desc";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<div class = 'subcontain'>";
                            echo "<h3>".$row['titlu']."</h3>";
                            echo "<p class = 'data'>";
                                echo "<i class='fa fa-calendar' style='font-size:18px; margin-right: 10px;'></i>" . $row['data'];
                            echo "</p>";
                            echo "<p class = 'descriere'>".$row['descriere']."</p>  ";
                        echo"</div>";
                    }
                }else {
                    echo "<div class = 'subcontain'>";
                        echo "<h3>0 news</h3>";
                    echo"</div>";
                }   
               
            ?>
            
        </div>

    </body>
</html>