<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn=mysqli_connect('localhost','root','','login');
    if($conn){
        $sql = "INSERT INTO `info` (`username`, `password`) VALUES ('$username', '$password')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Login successful')</script>";
            header('Location: main.html');
        }
        else{
            die(mysqli_error($conn));
        }
    }
}
?>