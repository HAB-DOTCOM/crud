<?php
define('BASEPATH', true); //access connection script if you omit this line file will be blank
require 'db.php'; //require connection script


if ( !isset($_POST['username'], $_POST['password']) ) {
	
	exit('Please fill both the username and password fields!');
}

if ($stmt = $pdo->prepare('SELECT id, admin, password FROM users WHERE username = ?')) {
	
	$stmt->bindParam(1, $_POST['username'],PDO::PARAM_STR);
	$stmt->execute(array($_POST['username']));
	$row  = $stmt->fetch();
    extract($row);
    if ($stmt->rowCount() > 0) {
        $stmt->execute();
        $stmt->fetch();
        if (password_verify($_POST['password'], $password) && $_SESSION['admin']=$admin) {
           
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;

            echo 'Welcome ' . $_SESSION['name'] . '!';
            header("location: ./admin.php");
        }
        else if(password_verify($_POST['password'], $password)) {
           
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
            header("location: ./index.php");
        } else {
            // Incorrect password
            echo 'Incorrect password!';
        }
    } else {
        // Incorrect username
        echo 'Incorrect username!';
    }
}
?>