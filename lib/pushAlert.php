<?php
    function pushAlert($alert){
        include("dbHelper.php");
        $query = "SELECT alert_message FROM alert WHERE alert_code='".$alert."'";
        $result = $sql -> query($query);
        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){
                echo $row["alert_message"];
            }
        }else{
            echo "database result is 0.";
        }
    }
?>