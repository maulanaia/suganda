<?php include_once("lib/pushAlert.php");?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body onload="cd()">
        <div class="container">
            <div id="mid-alert">
                <p id="alert" style="display:none;">
                    <?php if(isset($_GET["a"])){pushAlert($_GET["a"]);}?> Anda akan masuk ke dashboard dalam <span id="cd">5</span> detik.
                </p>
            </div>
        </div>
        <script>
            function cd(){
                var cd = new Date().getTime()+6000;
                var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = cd - now;
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("cd").innerHTML = seconds + " ";
                if (distance < 1000) {
                    window.location.replace("http://localhost/suganda/login.php");
                }
                }, 1000);
                document.getElementById("alert").style.display = "";
            }
        </script> 
    </body>
</html>
