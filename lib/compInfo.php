<?php
    function compTitle(){
        include("dbHelper.php");
        $query = "SELECT name FROM company_info WHERE id='0'";
        $result = $sql -> query($query);
        if($result->num_rows>0){
            while($row = $result -> fetch_assoc()){
                echo $row["name"];
            }
        }else{
            echo "database result is 0.";
        }
    }
?>