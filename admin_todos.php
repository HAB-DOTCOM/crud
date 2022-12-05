<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>exploit crud web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="lists w-50 m-auto my-4">
        <h1>All Lists</h1>
        <div id="lists">
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col" name="id">S.no</th>
      <th scope="col">ToDo List</th>
    <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'database.php';
        include 'db.php';
        $sql="SELECT * FROM todos WHERE 1=1";
        $result=mysqli_query($conn, $sql);

        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $title=$row['title'];
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $title  ?></td>
                    <td>
                    <a class="btn btn-success btn-sm" href="admin_edit.php?id=<?php echo $id ?>" role="button">Edit</a>
                    <a class="btn btn-danger btn-sm" href="admin_delete1.php?id=<?php echo $id ?>" role="button">Delete</a>
 
                    </td>
                      
                </tr>

                <?php
            }
        }
    ?>
    
   
  </tbody>
</table>
</body>

</html>