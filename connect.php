<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Database Connection
    $conn = new mysqli("localhost","root","ceq4lSite");
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into login");
        $stmt->bind_param("ss",$username, $password);
        $stmt->execute();
        echo "login successful";
        $stmt->close();
        $conn->close();
    }
?>