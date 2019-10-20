<?php
#name,password are the two values from form,
$name="admin";
$pass="admin";
$servername = "localhost";
$username = "ajay";
$password = "";
$dbname = "student attendance";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$q="SELECT id FROM admin_login WHERE name='$name' and pwd='$pass'";
$result = $conn->query($q);

if ( $result && $result->num_rows>0) {
  while($row = $result->fetch_assoc()) {

  
      $_SESSION['id']=$row['id'];
      $_SESSION['name']=$row['namee'];

  }
  header('Location:admin_view.php');

}
else{
    header('Location:admin_login.html');
} 

