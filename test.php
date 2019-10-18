<html>
<body>
<form method="post">
<input type="text" name="id">
<button name="sub1">sub1</button>
<button name="sub2">sub2</button>

</form>
</body>
</html>
<?php

$ip=["Sunday"=>0,"Monday"=>0,"Tuesday"=>0,"Wednesday"=>2,"Thursday"=>2,"Friday"=>0,"Saturday"=>2];


function fun1($var,$n){
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
   $sql="update attendance set ". $var ." = ". $var ."+" . $n ;
#echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Value incremented";
} else {
    echo "Error " . $conn->error;
}
$conn->close();
}

if(isset($_POST['sub1'])){
    $day=date('l');
    $n=$english["$day"];
    echo $n;
fun1('sub1',$n);
}
if(isset($_POST['sub2'])){
    fun1('sub2');
}




?>
