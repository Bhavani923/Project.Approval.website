<?php
 if(isset($_POST['upload'])){

   $file_name =  $_FILES['file']['name'];
   $file_type = $_FILES['file']['type'];
   $file_size = $_FILES['file']['size'];
   $file_tem_loc = $_FILES['file']['tmp_name'];
   $file_store = "upload/".$file_name;
   move_uploaded_file($file_tem_loc, $file_store);
 }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="review1up.css?v=<?php echo time(); ?>">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
 <body>
 
   <div class="container">
     <input type="checkbox" id="flip">
     <div class="cover">
       <div class="front">
         <div class="text">
           <span class="text-1">Submit the project report of<br> Review -1</span>
           <span class="text-2">In the choose file</span>
         </div>
       </div>
       <div class="back">
         <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
         <div class="text">
           <span class="text-1">All the best <br></span>
           <span class="text-2">Submit Your Project details</span>
         </div>
       </div>
     </div>
     <div class="forms">
         <div class="form-content">
           <div class="login-form">
             <div class="title">REVIEW -1</div>
             <form action="connectionreview.php" method="POST" enctype="multipart/form-data">
             <div class="input-boxes">
             <div class="input-box">
                 <input type="text" placeholder="Enter your Team name" name="teamname" required>
              </div>
               <div class="input-box">
                 <input type="text" placeholder="Enter your Team Members Details" name="teammem" required>
               </div>
               <div class="input-box">
                <input type="text" placeholder="Enter your Project name" name="projectnam" required>
              </div>
              <div class="input-box">
                <input type="text" placeholder="Enter the names of Softwares used" name="softwares" required>
              </div>
              <div class="input-box">
                <input type="file" name="file" required>
              </div>
               <div class="button input-box">
                 <input type="submit"  placeholder="Sumbit" name="submit1">
               </div>
               <div class="text sign-up-text">Done with review-1?Go for <label for="flip">Review-2</label></div>
             </div>
         </form>
       </div>
         <div class="signup-form">
           <div class="title">REVIEW -2</div>
           <form action="connectionreview.php" method="POST" enctype="multipart/form-data">
             <div class="input-boxes">
             <div class="input-box">
                 <input type="text" placeholder="Enter your Team name" name="teamname" required>
              </div>
               <div class="input-box">
                 <input type="text" placeholder="Project Link(Github/Drive)" name="prolink" required>
               </div>
               <div class="input-box">
                 <input type="text" placeholder="Project Representation video link" name="prorep" required>
               </div>
               <div class="input-box">
                 <input type="text" placeholder="Issues faced/Things learnt" name="issues" required>
               </div>
               <div class="input-box">
                <input type="text" placeholder="Project conclusion & Importance" name="concl" required>
              </div>
               <div class="button input-box">
                 <input type="submit" placeholder="Sumbit" name="submit2">
               </div>
               <div class="text sign-up-text">Haven't done with Review 1?Go for <label for="flip">Review-1</label></div>
             </div>
       </form>
     </div>
     </div>
     </div>
   </div>
 </body>
 </html>