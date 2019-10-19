<?php
#suppose that you give me an id,sub id and count of periods,
$id=4;
$sub_id="ip";
$count=4;
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
echo $q;
if ($conn->query($q) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}
if ($conn->query($q1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $q1 . "<br>" . $conn->error;
}


$conn->close();
?>
