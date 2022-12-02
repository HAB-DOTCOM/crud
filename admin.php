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
    

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Exploit admins</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>home page</a>
                    
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="login.html" class="dropdown-item">Sign In</a>
                            <a href="register.html" class="dropdown-item">Sign Up</a>
                            
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
 <!--hr class="bg-dark w-50 m-auto"-->
 <div class="lists w-50 m-auto ">
        <h1>user Lists</h1>
        <div id="lists">
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col" name="admin">id</th>
      <th scope="col">user name</th>
    <th>email</th>
    <th>first name</th>
    <th>last name</th>
    <th>Action</th>
    <th><a class="btn btn-success" href="admin_todos.php?id=<?php echo $id ?>" role="button">todos</a></th>
    </tr>
  </thead>
  <tbody>
  <?php
         include 'database.php';
         include 'db.php';
         $sql="SELECT * FROM users WHERE 1= 1";
         $result=mysqli_query($conn, $sql);

        if($result){
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row['id'];
                $username=$row['username'];
                $email=$row['email'];
                $first_name=$row['first_name'];
                $last_name=$row['last_name'];
                ?>
                    <td><?php echo $id  ?></td>
                    <td><?php echo $username?></td>
                    <td><?php echo $email  ?></td>
                    <td><?php echo $first_name  ?></td>
                    <td><?php echo $last_name  ?></td>
                    <td>
                      <a class="btn btn-danger btn-sm" href="admin_delete.php?id=<?php echo $id ?>" role="button">Delete</a>
                    </td>
                         
        </tr>

                <?php
            }
        }
    ?>
    
   
  </tbody>
</table>
        </div>
    </div>

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            
            <!-- Navbar End -->
        </div>
        
        <!-- Content End -->
    
   


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>