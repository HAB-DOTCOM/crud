<?php
    include 'database.php';
    $id=$_GET['id'];

    $sql="DELETE FROM users WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./admin.php");
    }

?>