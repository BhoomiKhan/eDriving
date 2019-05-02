<?php
$email = $_POST['username'];
$pass = $_POST['password'];


$conn=new mysqli("localhost", "root", "", "fyp");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
$sql= "SELECT * FROM user WHERE email='$email' AND pass='$pass'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            echo "login success";
        } else {
            die("User does not exist");
        }  