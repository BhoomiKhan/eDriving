<?php

class VirtualMechanicAssistance
{
    private $conn;
    
    public function __construct($serverName, $userName, $password, $dbName)
    {
        
        $this->conn = new mysqli($serverName, $userName, $password, $dbName);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
  
    
    public function connectoinClose()
    {
        $this->conn->close();
    }
    
    
    
    public function logIn($lear_email, $lear_password)
    {
        $sql    = "SELECT * FROM learner WHERE lear_email='$lear_email' AND lear_password='$lear_password' ";
        $result = $this->conn->query($sql);
        if ($result->num_rows == 1) {
            //Fetch into associative array
            $row      = $result->fetch_assoc();
            $dbData   = array();
            $dbData[] = $row;
            echo json_encode($dbData);
        } else {
            die("not exist");
        }
    }
    
    public function checkUser($lear_email, $sql)
    {
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return "exist";
        } else {
        return "not exist";
        }
    }
    
    public function addUser($userArr) {
  $lear_email=$userArr['lear_email'];
  $lear_name=$userArr['lear_name'];
  $lear_password=$userArr['lear_password'];
  $lear_phone_number=$userArr['lear_phone_number'];
  $lear_dob=$userArr['lear_dob'];
  $lear_location=$userArr['lear_location'];
  $sql="INSERT INTO learner (lear_name, lear_email, lear_password, lear_phone_number, lear_zip_code, lear_dob, lear_location, latitude, longitude, fcm_token) VALUES ('$lear_name','$lear_email', '$lear_password', '$lear_phone_number', '$lear_zip_code', '$lear_dob', '$lear_location', '$latitude', '$longitude', '$fcm_token')";
  $result=$this->conn->query($sql);
  if($result) {
   //sent last inserted row id 
   return $this->conn->insert_id;
  } else {
   die ("not added");
  }
 }


 public function checkId($sql) {
  $result= $this->conn->query($sql);
  if($result) {
   if($result->num_rows>0) {
    return "found";
   } else {
    return "not found";
   }
  } else {
   die("Query is not executed");
  }
 }
}
?>