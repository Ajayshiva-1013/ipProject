<?php
#get these values using ajax, i have used static values just to check whether the query is working.
$name='Aadhavan';
 
  session_start();
  $servername = "localhost";
  $username = "ajay";
  $password = "";
  $dbname = "student attendance";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$q="DELETE FROM stu_login where namee = '$name' ";
echo $q;
if ($conn->query($q) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}
$conn->close();
?>
