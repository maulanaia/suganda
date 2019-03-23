<?php include_once("lib/action.php");?>
<?php include_once("lib/compInfo.php");?>
<?php include_once("lib/pushAlert.php");?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <div id="top-alert">
                <?php
                    if(isset($_GET["a"])){
                        pushAlert($_GET["a"]);
                    }
                ?>
            </div>
            <div id="login-area">
                <?php
                    if(isset($_POST["id"])){
                        login($_POST["id"]);
                    }
                ?>
                <form action="" method="POST">
                    <h2><?php compTitle();?></h2>
                    <input type="text" name="id" placeholder="ID Karyawan"/>
                    <input type="submit" value="Masuk"/>
                </form>
            </div>
        </div>
    </body> 
</html>
