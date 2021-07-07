<?php
#get these values using ajax, i have used static values just to check whether the query is working.
  $name=$_POST['name'];
  $servername = "localhost";
  $username = "ajay";
  $password = "";
  $dbname = "student attendance";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $q="Select id from stu_login where namee = '$name'";
#echo $q;
#echo "<br>";
$result=$conn->query($q);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $val = $row['id'] ;
        echo $val;
    }
  }
$q1="DELETE FROM stu_login where namee = '$name' ";
//echo $q;
if ($conn->query($q1) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $q1 . "<br>" . $conn->error;
}
$q3="Delete from attendance where id = ".$val;
if ($conn->query($q3) === TRUE) {
  //echo "Record deleted successfully";
} else {
  echo "Error: " . $q3 . "<br>" . $conn->error;
}

?>
