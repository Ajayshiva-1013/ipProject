<?php
#suppose that you give me an id,sub id and count of periods,
$id=$_POST['id'];
$id=(int)$id;
$sub_id=$_POST['sub'];
$count=$_POST['period'];
$count=(int)$count;
$servername = "localhost";
  $username = "ajay";
  $password = "";
  $dbname = "student attendance";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $d=date("Y-m-d");

$q="UPDATE attendance set ".$sub_id." = ".$sub_id." + ".$count. " where id = ".$id;
$q1="UPDATE attendance set ".'ld'.$sub_id." = '$d' where id = ".$id;

if ($conn->query($q) === TRUE) {
    echo "Attendence added successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}
if ($conn->query($q1) === FALSE) {
    echo "Error: " . $q1 . "<br>" . $conn->error;
}


$conn->close();
?>
