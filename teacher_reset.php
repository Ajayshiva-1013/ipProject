<?php
session_start();
$servername = "localhost";
$username = "ajay";
$password = "";
$dbname = "student attendance";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sub=$_SESSION['id'];
$arr=['ip'=>['Mon'=>1,'Tue'=>0,'Wed'=>2,'Thu'=>0,'Fri'=>0,'Sat'=>2,'Sun'=>3],'cns'=>['Mon'=>1,'Tue'=>1,'Wed'=>1,'Thu'=>0,'Fri'=>2,'Sat'=>0]];
$a=date('D');
echo "<script>console.log(".$_POST['button'].")</script>";
echo "<script>console.log(".$_SESSION['id'].")</script>";
$val=$arr[$sub][$a];
$buttons = array('1','2','3','4','5','6','7','8','9','10');

foreach ($buttons as $button) {
    if (($_POST['button'])==$button) {
        echo "button eneterd";
    if ($_SESSION[$button.'s']==True ) {
        echo"session entered";
      $q="Update attendance set $sub=$sub-$val   where $sub>0 and id=" .$button ;
      echo $q;
      $result = $conn->query($q);        
      $_SESSION[$button.'s']=False;
      $q1="Update attendance set ld".$sub." = '0000-00-00'  where id= ".$button;
      $result1=$conn->query($q1);
      echo "successfull";
  
      }
    }
}
?>