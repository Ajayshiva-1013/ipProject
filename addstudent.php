<?php

#get these values using ajax, i have used static values just to check whether the query is working.
$pass=$_POST['pass'];
$name=$_POST['name'];
echo '<script>alert("worling");</script>';
  $servername = "localhost";
  $username = "ajay";
  $password = "";
  $dbname = "student attendance";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$q="INSERT INTO stu_login (pwd , namee ) VALUES ('$pass','$name')";
if ($conn->query($q) === TRUE) {
    echo "New student addded  successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}
$conn->close();
?>
