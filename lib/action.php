<?php
    function login($id){
        include("dbHelper.php");
        $query = "SELECT id, name FROM employee WHERE id='".$id."'";
        $result = $sql -> query($query);
        if($result -> num_rows >0){
            while($rows = $result -> fetch_assoc()){
                header("location:http://localhost/suganda/success.php?a=101");
            }
        }else{
            header("location:http://localhost/suganda/login.php?a=100");
        }
    }
?>
