<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $a=validate();
  if($a==-1){
    echo 'wrong';
    
  }
  else{
   echo 'correct';
  }
}
else{
if (isset($_SERVER['HTTP_COOKIE'])) {
  $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
  foreach($cookies as $cookie) {
      $parts = explode('=', $cookie);
      $name = trim($parts[0]);
      setcookie($name, '', time()-1000);
      setcookie($name, '', time()-1000, '/');
  }
} 
}
function validate(){
$user=$_POST['email'];
$pwd=$_POST['password'];
$check=$_POST['check'];
//echo $pwd;
$servername = "localhost";
$username = "ajay";
$password = "";
$dbname = "student attendance";
$a=1;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_POST['check']=='true'){
//print_r( 'teacher');
$q="SELECT id, namee, pwd FROM t_login WHERE namee='$user' and pwd='$pwd'";
$result = $conn->query($q);
if ($result->num_rows > 0) {
  // output data of each rows
  while($row = $result->fetch_assoc()) {

  
      $_SESSION['id']=$row['id'];
      $_SESSION['name']=$row['namee'];

      //echo $row['namee'];
  }

} 
else {
  
return -1;
}
$conn->close();
}
else{
  $q="SELECT id, namee, pwd FROM stu_login WHERE id='$user' and pwd='$pwd'";
  $result = $conn->query($q);
  if ($result->num_rows > 0) {
    // output data of each rows
    while($row = $result->fetch_assoc()) {
      session_start();
    
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['namee'];


        //echo $row['namee'];
    }

} else {
    //
    
return -1;
}
$conn->close();
}
//echo $q;

}
?>