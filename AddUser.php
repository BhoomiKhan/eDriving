<?php

$firstName = $_POST['firstName'];
$lName = $_POST['lastName'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$city = $_POST['city'];
$zip = $_POST['zip'];

$conn=new mysqli("localhost", "root", "", "fyp");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

$sql= "insert into user (first_name, last_name, email, pass, city, zip) values('$firstName','$lName', '$email','$pass', '$city', '$zip') ";

$result=$conn->query($sql);
 echo "user has been added";
  

//
//if (!isset($_POST['lear_email']))
//	{
//	die("lear_email is not set");
//	}
//
//$lear_email = $_POST['lear_email'];
//
//if (!isset($_POST['lear_password']))
//	{
//	die("lear_password  is not set");
//	}
//
//$lear_password = $_POST['lear_password'];
//
//if (!isset($_POST['lear_phone_number']))
//	{
//	die("lear_phone_number  is not set");
//	}
//
//$lear_phone_number = $_POST['lear_phone_number'];
//
//if (!isset($_POST['lear_location']))
//	{
//	die("lear_location  is not set");
//	}
//
//$lear_location = $_POST['lear_location'];
//
//
//// $fcm_token="afzal khan";
//// $userArr=array("lear_name"=>"Ibrahim khan", "lear_email"=>"muhammadafzalkhan@gmail.com","lear_phone_number"=>"232309", "lear_password"=>"kch b nhe", "lear_zip_code"=>"skp zipcode", "lear_dob"=>"12.2.2010", "lear_location"=>"kch b nhe");
//
//$userArr = array(
//	"lear_name" => $lear_name,
//	"lear_email" => $lear_email,
//	"lear_phone_number" => $lear_phone_number,
//	"lear_password" => $lear_password,
//	"lear_dob" => $lear_dob,
//);
//$obj = new Learner("localhost", "bhoomii", "bhoomii", "e_driving");
//
//$sql    = "SELECT * FROM learner WHERE lear_email='$lear_email' ";
//if ($obj->checkUser($lear_email, $sql) != "exist")
//	{
//	echo $obj->addUser($userArr);
//	$obj->connectoinClose();
//	}
//  else
//	{
//	echo "already exist";
//	}

?>
