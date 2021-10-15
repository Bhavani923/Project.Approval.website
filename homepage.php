<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <title>Home page</title>
    <link rel="stylesheet" href="homepage.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/logo.jpeg" type="images/logo.jpeg">
</head>
<body>
    <div class="container-fluid main_menu">
        <div class="row">
            <div class="col-md-11 col-12 mx-auto">
             <nav class="navbar navbar-expand-lg">
                 <a class="navbar-brand" href="#"><i class="far fa-snowflake"></i> Project.Approval.Website  <i class="far fa-snowflake"></i></a>
                 
               
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                       <a class="nav-link" href="homepage.php">Home </a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="teacherDashboard.php">Project Submission</a>
                     </li>
                     
                     <li class="nav-item">
                       <a class="nav-link" href="timeline.php">Timeline</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="announcement.php">Announcement</a>
                      </li>
                      <li class="nav-item">
                        <!-- <a class="nav-link" href="#">Signin -->
                         <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sign In
                              </a>
                            
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="studentRegister.php">Student</a>
                                <a class="dropdown-item" href="teacherRegistration.php">Lecturer</a>
                                
                              </div>
                          </div>
                      </li>
                   </ul>
                   
                 </div>
               </nav>
            </div>
        </div>
    </div>
    <!--body part-->
    <div class="container-fluid main_header">
        <div class="row">
            <div class="col-md-10 col-12 mx-auto">
                <div class="row">
                    <div class="col-md-6 col-12 main_header_left">
                      <div class="logo"></div>
                    <p class="main_name">Project.Approval.website</p>
                        <!-- <P class="des">Submit&nbsp;    Your&nbsp; <span>      Project </span>
                        &nbsp;  Online    </P> -->
                        <p class="des">"Plans are only good intentions unless
                           they immediately degenerate into hard work."</p>
                        
                    </div>

                    <div class="col-md-6 col-12 main_header_right">
                    <!-- <P class="des des1">Submit&nbsp;    Your&nbsp; <span>      Project </span>
                        &nbsp;  Online    </P>
                     -->
                      <div class="img1">
                        
                      </div>
                      <div class="img2"></div>
                      <div class="img3"></div>
                      <div class="img4"></div>
                        
                    </div>
                </div>
            </div>
         </div>
      </div>
    </div>  
    
   <div class="social-menu">
  <ul>
    <li><a href=""><i class="fab fa-facebook"></i></a></li>
    <li><a href=""><i class="fab fa-twitter"></i></a></li>
    <li><a href=""><i class="fab fa-instagram"></i></a></li>
    <li><a href=""><i class="fab fa-youtube"></i></a></li>
    <li><a href=""><i class="fas fa-envelope-square"></i></a></li>
  </ul>
</div>
     
    

</body>
</html>