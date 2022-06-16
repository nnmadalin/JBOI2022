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
        
        <link rel="stylesheet" href="../../style/navbar.css">
        <link rel="stylesheet" href="../../competition/style/results.css">
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

        <div class="contain">
            <h1 style = "text-align: left; margin-bottom: 50px; color: black; font-size: 50px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Results</h1>
            
            <table class="styled-table" id = "scor_elevi">
            <?php
                /*
                $p = 1;
                $file = fopen($_SERVER['DOCUMENT_ROOT'] . '/document/test.csv' , "r");
                while (($data = fgetcsv($file)) !== false) {
                    $contor = 1;
                    if ($p == 1)
                    {
                        echo "<thead><tr>";
                        foreach ($data as $i) {

                            echo "<th>".htmlspecialchars($i)."</th>";
                        }
                        echo "</tr></thead> \n";
                        $p = 2;
                    }
                    else
                    {
                        echo "<tr>";
                        foreach ($data as $i) {
                            echo "<td>" . htmlspecialchars($i) 
                                . "</td>";
                        }
                        echo "</tr> \n";
                    }
                 }
           
                fclose($file);
                */
                 
            ?>
            </table>
        </div>
        <script>
            let cols = 3;
            let colf = 8;
            for(let i = 1; i < document.getElementById("scor_elevi").rows.length; i++)
            {
                for(let j = cols; j <= colf; j++){
                    if (document.getElementById("scor_elevi").rows[i].cells[j].innerHTML <= 25)
                    {
                        document.getElementById("scor_elevi").rows[i].cells[j].style.backgroundColor = "#F40000";    
                    }
                    else if (document.getElementById("scor_elevi").rows[i].cells[j].innerHTML <= 50)
                    {
                        document.getElementById("scor_elevi").rows[i].cells[j].style.backgroundColor = "#f7883e";    
                    }
                    else if (document.getElementById("scor_elevi").rows[i].cells[j].innerHTML <= 75)
                    {
                        document.getElementById("scor_elevi").rows[i].cells[j].style.backgroundColor = "#ccd916";    
                    }
                    else if (document.getElementById("scor_elevi").rows[i].cells[j].innerHTML <= 100)
                    {
                        document.getElementById("scor_elevi").rows[i].cells[j].style.backgroundColor = "#4E9A05";    
                    }
                }
            }
            for(let i = 1; i < document.getElementById("scor_elevi").rows.length; i++)
            {
                if (document.getElementById("scor_elevi").rows[i].cells[9].innerHTML <= 150)
                {
                    document.getElementById("scor_elevi").rows[i].cells[9].style.backgroundColor = "#F40000";    
                }
                else if (document.getElementById("scor_elevi").rows[i].cells[9].innerHTML <= 300)
                {
                    document.getElementById("scor_elevi").rows[i].cells[9].style.backgroundColor = "#f7883e";    
                }
                else if (document.getElementById("scor_elevi").rows[i].cells[9].innerHTML <= 450)
                {
                    document.getElementById("scor_elevi").rows[i].cells[9].style.backgroundColor = "#ccd916";    
                }
                else if (document.getElementById("scor_elevi").rows[i].cells[9].innerHTML <= 600)
                {
                    document.getElementById("scor_elevi").rows[i].cells[9].style.backgroundColor = "#4E9A05";    
                }
            }
            
        </script>
    </body>
</html>