<?php
    session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="hackathon2";
    $conn=mysqli_connect($host,$user,$pass,$db);
    //echo "<script>alert('connect succesfully')</script>";
    
    if(isset($_POST['enter'])){
        $text=$_POST['text'];
        if($text!=null){
        $sql="INSERT INTO `announcement` (`text`) VALUES ('$text')";
		$query=mysqli_query($conn,$sql);
    }else{
        echo " enter something";
    }
}
?>