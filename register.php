<?php
define('BASEPATH', true); //access connection script if you omit this line file will be blank
require 'db.php'; //require connection script


 if(isset($_POST['submit'])){  
        try {
            $dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


         $first = $_POST['first_name'];
         $last = $_POST['last_name'];
         $user = $_POST['username'];
         $email = $_POST['email'];
         $pass = $_POST['password'];

         $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
         var_dump($pass);
         //Check if username exists
         $sql = "SELECT COUNT(username) AS num FROM users WHERE username =      :username";
         $stmt = $pdo->prepare($sql);

         $stmt->bindValue(':username', $user);
         $stmt->execute();
         $row = $stmt->fetch(PDO::FETCH_ASSOC);

         if($row['num'] > 0){
             echo '<script>alert("Username already exists")</script>';
        }
        
       else{

    $stmt = $dsn->prepare("INSERT INTO users (first_name,last_name,username, email, password) 
    VALUES (:first_name,:last_name,:username,:email, :password)");

    $stmt->bindParam(':first_name', $first);
    $stmt->bindParam(':last_name', $last);
    $stmt->bindParam(':username', $user);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $pass);
    $stmt->execute();
}
}catch(PDOException $e){
    $error = "Error: " . $e->getMessage();
    echo '<script type="text/javascript">alert("'.$error.'");</script>';
}
     }

?>

