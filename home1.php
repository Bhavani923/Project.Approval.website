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
    
    <title>Document</title>
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container-fluid main_menu">
        <div class="row">
            <div class="col-md-11 col-12 mx-auto">
             <nav class="navbar navbar-expand-lg">
                 <a class="navbar-brand" href="#"><i class="far fa-snowflake"></i> Dsce.edu.in  <i class="far fa-snowflake"></i></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
               
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                       <a class="nav-link" href="home1.php">Home </a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="selectBranch.php">Project Submittion</a>
                     </li>
                     
                     <li class="nav-item">
                       <a class="nav-link" href="#">Timeline</a>
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
                        <p class="main_name">dsce.edu.in</p>
                        <P class="des">Submit &nbsp; Your  <span> Project &nbsp; </span>  Here</P>
                        <button type="button" class="submit-project">Click here</button>
                    </div>

                    <div class="col-md-6 col-12 main_header_right">
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

    <!-- <div class="container-fluid mid-body">
      <div class="row">
        <div class="col-md-8 col-12 mx-auto inner-box">
          <div class="row">
            <p>How to submit Project</p>
          </div>
          <div class="col-md-8 col-12 mx-auto inner-box">
          <div class="row">
            <p>Steps to submit your project</p>
          </div>
        </div>
        <div class="col-md-8 col-12 mx-auto inner-box">
          <div class="row">
            <p>Steps to submit your project</p>
          </div>
        </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="container-fluid next-body">
      <div class="row">
          <div class="col-md-11 col-12 mx-auto  inner-body">
              <p>Branches at DCSE</p>
              <div class="row">
                
                <div class="col-md-3 col-12  para">
                  <img src="images/bg3.jpeg" class="imgs" >
                  <p>Computer Science and Engineering</p>
                </div>
                <div class="col-md-3 col-12  para">
                  <img src="images/bg3.jpeg" class="imgs" >
                  <p>Computer Science and Engineering</p>
                </div>
                <div class="col-md-3 col-12 para">
                  <img src="images/bg3.jpeg" class="imgs" >
                  <p>Computer Science and Engineering</p>
                </div>
                <div class="col-md-3 col-12 para">
                  <img src="images/bg3.jpeg" class="imgs" >
                  <p>Computer Science and Engineering</p>
                </div>
              </div>
            
          </div> -->

          <div class="social-menu">
  <ul>
    <li><a href=""><i class="fab fa-facebook"></i></a></li>
    <li><a href=""><i class="fab fa-twitter"></i></a></li>
    <li><a href=""><i class="fab fa-instagram"></i></a></li>
    <li><a href=""><i class="fab fa-youtube"></i></a></li>
    <li><a href=""><i class="fas fa-envelope-square"></i></a></li>
  </ul>
</div>
          
      </div>
    </div>     
</body>
</html>