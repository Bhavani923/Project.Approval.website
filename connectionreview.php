<?php
    

$conn = mysqli_connect('localhost','root','','hackathon2');
if($conn->connect_error){
    die('Connection  failed : '.$conn->connect_error);
}
else{
    echo "<script>alert('connect succesfully')</script>";
    if(isset($_POST['submit1']))
    {
        $teamname =$_POST['teamname'];
         $teammem =$_POST['teammem'];
         $projectnam =$_POST['projectnam'];
         $softwares =$_POST['softwares'];
        //  $prolink =$_POST['prolink'];
        //  $prorep =$_POST['prorep'];
        //  $issues =$_POST['issues'];
        //  $concl =$_POST['concl'];
    

    //$stmt = $conn->prepare("insert into projectdetails(teamname,teammem,projectnam,softwares,prolink,prorep,issues,concl)values(?,?,?,?,?,?,?,?)");
    // 
    if(($teamname!==null) && ($teammem!=null) && ($projectnam!=null) && ($softwares!=null)){
    $sql="INSERT INTO `submitproject` (`teamname`,`teammem`,`projectnam`,`softwares`) 
    VALUES ('$teamname','$teammem','$projectnam','$softwares')";
    $query=mysqli_query($conn,$sql);
    echo "<script>alert('submitted succesfully')</script>";
    header('location: review1up.php');
    }else{
        echo "<script>alert('not succesfully')</script>";
    }
}

if(isset($_POST['submit2']))
    {
        $teamname=$_POST['teamname'];
         $prolink =$_POST['prolink'];
         $prorep =$_POST['prorep'];
         $issues =$_POST['issues'];
         $concl =$_POST['concl'];
    

    //$stmt = $conn->prepare("insert into projectdetails(teamname,teammem,projectnam,softwares,prolink,prorep,issues,concl)values(?,?,?,?,?,?,?,?)");
    // 
    $sql="INSERT INTO `submitproject2` (`teamname`,`prolink`,`prorep`,`issues`,`concl`) 
    VALUES ('$teamname','$prolink','$prorep','$issues','$concl')";
    $query=mysqli_query($conn,$sql);
    header('location: homepage.php');
}

}


?>