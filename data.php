<?php
include 'database.php';
include 'db.php';
$title=$_POST['title'];

// echo "Name Is".$name ."Phone Number:".$phone;



$user_id = $_SESSION['id'];

$sql="INSERT INTO todos(title, user_id)VALUES('$title', '$user_id')";


$result=mysqli_query($conn, $sql);
if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>