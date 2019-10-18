<?php
session_start();
echo $_SESSION['id'];
session_destroy();
$_SESSION[]=array();
$d=date("Y/m/d");
echo $d;
$d1="2019/09/28";
echo '<br>';
if($d>$d1){
    echo 'ajay';

}
if(isset($_GET["ob"])){
    echo "button clicked";
}
?>
