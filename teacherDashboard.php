<?php include('teacherAnnounce.php') ?>

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
    <link rel="stylesheet" href="teacherDashboard.css?v=<?php echo time(); ?>">
    <script src="teacherDashboard.js"></script>
</head>
<body>
<div class="container-fluid main_menu">
        <div class="row">
            <div class="col-md-11 col-12 mx-auto">
             <nav class="navbar navbar-expand-lg">
                 <a class="navbar-brand" href="#"><i class="far fa-snowflake"></i> Project.Approval.Website  <i class="far fa-snowflake"></i></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
               
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                       <a class="nav-link" href="homepage.php">Home </a>
                     </li>
                     
                     
                     <li class="nav-item">
                       <a class="nav-link" href="announcement.php">Announcement</a>
                     </li>
                     
                      
                      
                   </ul>
                   
                 </div>
               </nav>
            </div>
        </div>
    </div>



<!-- body part -->
    <!-- <div class="container-fluid"> -->
        <div class="row">
            <div class="col-md-10 col-12 max-auto main_header">
                <div class="row">
                    <div class="col-md-10 col-12 main_header_left">
                      <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')">Project Submitted</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">Any Queries/problems</button>
                        <!-- <button class="tablinks" onclick="openCity(event, 'Tokyo')">Logout</button> -->
                       </div>
                    </div>

                       <div class="col-md-8 col-12 main_header_right">
                            <div id="London" class="tabcontent">
                              <?php
                                $db=mysqli_connect("localhost","root","","hackathon2");
                                $s="SELECT * FROM submitproject";
                                $q = mysqli_query($conn,"SELECT * FROM `submitproject` ");
                                    $res=mysqli_query($db,$s);
                                       
                                        echo "<div class='col box_1'>";
                                              echo "<p class='review'>"."Review1"."</p>";
                                                    while($row= mysqli_fetch_array($res)){
                                                      // echo "<div class='row'>";
                                                        echo "<div class='col box_2'>";
                                                        echo "<p class='text_n'>"."Teamename:  "."<span>".$row['teamname']."<span>"."</p>";
                                                        
                                                        echo "<p class='text_n'>"."Team members:  "."<span>".$row['teammem']."<span>"."</p>";
                                                        echo "<p class='text_n'>"."Project Name:  "."<span>".$row['projectnam']."<span>"."</p>";
                                                        echo "<p class='text_n'>"."SoftWare Used:  "."<span>".$row['softwares']."<span>"."</p>";
                                                        echo "</div>";
                                                       // echo "</div>";		
                                                    }
                                               // echo "</div>";	
                                                echo "</div>";	
                                    

                                      //review 2
                                      $sql="SELECT * FROM submitproject2";
                                $query = mysqli_query($conn,"SELECT * FROM `submitproject2` ");
                                    $result=mysqli_query($db,$sql);
                                       
                                        echo "<div class='col box_1'>";
                                              echo "<p class='review'>"."Review2"."</p>";
                                                    while($row= mysqli_fetch_array($result)){
                                                      // echo "<div class='row'>";
                                                        echo "<div class='col box_2'>";

                                                        // echo "<p class='text_n'>"."Teamename:  "."<span>".$r['teamname']."<span>"."</p>";
                                                        
                                                        // echo "<p class='text_n'>"."Team members:  ".$r['teammem']."</p>";
                                                        // echo "<p class='text_n'>"."Project Name:  ".$r['projectnam']."</p>";
                                                         echo "<p class='text_n'>"."Teame Name:  "."<span>".$row['teamname']."<span>"."</p>";

                                                        echo "<p class='text_n'>"."Repository Link: "."<span>".$row['prolink']."<span>"."</p>";
                                                        
                                                        echo "<p class='text_n'>"."Vedio Link: "."<span>".$row['prorep']."<span>"."</p>";
                                                        echo "<p class='text_n'>"."Issues Faced: "."<span>".$row['issues']."<span>"."</p>";
                                                        echo "<p class='text_n'>"."Conclusion: "."<span>".$row['concl']."<span>"."</p>";
                                                        echo "</div>";
                                                       // echo "</div>";		
                                                    }
                                               // echo "</div>";	
                                                echo "</div>";	


                              ?>




                            </div>

                            <div id="Paris" class="tabcontent announcement">
                               <form method="post" action="teacherDashboard.php">
                                  <label for="annoce">Feel free to drop your queries/problems</label><br/> 
                                   <input type="text" id="announce" name="text" placeholder="Eneter your text here"/>
                                  <button type="submit" name="enter">Enter</button>
                               </form>
                                 <?php
                                  
                                    $db=mysqli_connect("localhost","root","","hackathon2");
                                    $sql="SELECT * FROM   announcement";
                                    $query = mysqli_query($conn,"SELECT * FROM `announcement` ");
                                    $result=mysqli_query($db,$sql);
                                        while($row = mysqli_fetch_array($query)){
                                                $row['text'];
                                                
                                        }
                                        
                                       
                                                //echo "<div class='row'>";
                                                echo "<div class='col container1'>";
                                                echo "<p class='con'>"."Problems faced by students"."</p>";
                                                    while($row= mysqli_fetch_array($result)){
                                                      // echo "<div class='row'>";
                                                        echo "<div class='col container2'>";
                                                        echo "<p class='text_n'>".$row['text']."</p>";
                                                        // echo "<p class='text_p'>".$row['give_feedback']."</p>";
                                                       
                                                        echo "</div>";
                                                       // echo "</div>";		
                                                    }
                                               // echo "</div>";	
                                                echo "</div>";	
                                     ?>  
                                    
                            
                            </div>

                            <div id="Tokyo" class="tabcontent">
                            <h3>Tokyo</h3>
                            <p>Tokyo is the capital of Japan.</p>
                            </div>
                    
                    </div>
                    
                </div>
            </div>
        <!-- </div> -->
    </div>
</body>
</html>