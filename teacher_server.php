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
#$arr=['ip'=>['Mon'=>0,'Tue'=>0,'Wed'=>2,'Thu'=>0,'Fri'=>0,'Sat'=>2,'Sun'=>3],'cns'=>['Mon'=>1,'Tue'=>1,'Wed'=>1,'Thu'=>0,'Fri'=>2,'Sat'=>0]];
$v=date('l');
echo $v;
$q="Select " .$v. " from period where name LIKE '$sub'";
#echo $q;
#echo "<br>";
$result=$conn->query($q);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $val = $row[$v] ;
    }
  }
//echo "<script>console.log(".$_POST['button'].")</script>";
//echo "<script>console.log(".$_SESSION['id'].")</script>";
#$val=$arr[$sub][$a];
$buttons = array('1','2','3','4','5','6','7','8','9','10'); 
foreach ($buttons as $button) { 
        if (($_POST['button'])==$button) {
          if (isset($_POST['button'])){  
          $q3="SELECT ld".$sub." from attendance where id=".$button;
          //echo '<script>console.log("EntryFound");</script>';
          $_SESSION[$button.'s']=True;
          //echo $_SESSION['$button'];
          $result2 = $conn->query($q3);
if ($result2->num_rows > 0) {
  // output data of each rows
  while($row = $result2->fetch_assoc()) {
      //print_r($row);
      $date1=$row['ld'.$sub];
      
      
      
      //echo $row['namee'];
  }
}
  $d=date("Y-m-d");
          
          if($date1<$d){
            
          //$_SESSION[]=True;
          
          //print_r($_SESSION);
          $q="Update attendance set $sub=$sub+$val where id=" .$button;
          $result = $conn->query($q);        
          $q1="Update attendance set ld".$sub." = '$d'  where id= ".$button;
          //echo "<script> console.log( " . $q1 ."); </script>";
          $result1=$conn->query($q1);
          }
        } 
        }
}

  ?>