<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $firstname=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conn=mysqli_connect('localhost','root','','signup');
    if($conn){
        $sql="INSERT INTO `sign`(`username`,`email`,`password`) VALUES ('$username','$email','$password')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Account Created')</script>";
            header('Location: login.html');
        }
        else{
            echo "<script>alert('try again')</script>";
            die(mysqli_error($conn));
        }
    }
}
?>