<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content = "Junior Balkan Olympiad in Informatics - 2022 | Regina Maria Dorohoi High School">
        <meta name="description" content="Junior Balkan Olympiad in Informatics - 2022 | Regina Maria Dorohoi High School | Dorohoi, Botosani, ROMANIA">
        <meta name="keywords" content="Junior Balkan Olympiad in Informatics, JBOI, jboi, Regina Maria Dorohoi, Regina Maria, jboi, jboi2022, JBOI2022, jboi-2022, olimpiada, Dorohoi, concurs, Balka, balcaniada, juniori, junior, boi, regina dorohoi, jboi dorohoi, olimpiada dorohoi, dorohoi">
        <meta name = "author" content = "Neauna Madalin">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,600&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../../js/script.js"></script>
        
        <link rel="stylesheet" href="../../style/index.css">
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

        <div class="slideshow">
            <div class = "contain_title">
                <h1 class = "title">- JBOI 2022 -</h1>
                <h1 class = "title">Junior Balkan Olympiad in Informatics</h1>
                <h1 class = "title">Dorohoi • Romania</h1>
            </div>
            <div class="fade"></div>
            <div class="images">
                <img class ="img_slide" src="../../image/img3.jpg">
            </div>
        </div>
        

        <div class = "last_news">
            <h2 class = "last_title"><a href = "../../news" style = "text-decoration: none; font-family: 'Poppins', sans-serif !important; font-size: 40px;">Last News</a></h2>
            <ul class="last_php">
            <?php
                        $conn = new mysqli("localhost", "", "", "");
                        $sql = "SELECT * FROM news ORDER BY id desc";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            // output data of each row
                            if($row = $result->fetch_assoc()) {
                                echo "<div class = 'subcontain'>";
                                    echo "<h3 style = 'color:rgb(48, 78, 134); font-size: 25px;'>".$row['titlu']."</h3>";
                                    echo "<p class = 'data' style = 'font-size: 15px;'>";
                                        echo "<i class='fa fa-calendar' style='font-size:15px; margin-right: 10px; margin-bottom: 10px; padding-left:20px'></i>" . $row['data'];
                                    echo "</p>";
                                    echo "<p class = 'descriere' style = 'color:black; font-size:18px;'>".$row['descriere']."</p>  ";
                                echo"</div>";
                            }
                        }else {
                            echo "<div class = 'subcontain'>";
                                echo "<h3>0 news</h3>";
                            echo"</div>";
                        }   
                    
                    ?>    
            </ul>
        </div>
        
        <div class = "welcome">
            <div class = "left">
                <img src = "../../image/city.jpg" class = "logo-welcome">
            </div>
            
            <div class="right">
                <h1 class = "title_welcome">Welcome!</h1>
                <p class = "paragraf">
                    Welcome to <a href = "https://goo.gl/maps/EdF5iEgBu6QLLPJQ6">Dorohoi</a>, <a href = "https://goo.gl/maps/pmBgqb3udG5LS3gL7">Botosani</a> County, Romania!<br><br>
                    <b><a href = "https://goo.gl/maps/EdF5iEgBu6QLLPJQ6">Dorohoi</a></b> is a municipality in Botosani County, Romania. It is located on the banks of the Jijia River, 36 km from Botoșani, which is the county seat of the same name.<br><br>
                    The city of <a href = "https://goo.gl/maps/EdF5iEgBu6QLLPJQ6">Dorohoi</a> is located <b>50 kilometers</b> from <a href = "https://goo.gl/maps/zvt34hX3X5VHpYiD6">Suceava International Airport</a>, and <b> 150 kilometers </b> from  <a href = "https://goo.gl/maps/YAfSfCjvhjFzqhQ57"> Iasi International Airport</a>!
                </p>
            </div> 
        </div>
        <div class = "space"></div>

        <div class = "bottom">
            <a href = "../../contact"class = "bottom_contact">Contact</a>
        </div>

        <br><br><br>

    </body>
</html>