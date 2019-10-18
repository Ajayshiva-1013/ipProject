<?php
$s="1s";
$s=substr_replace($s ,"", -1);
//echo $s;

$arr=['ip'=>['Mon'=>0,'Tue'=>0,'Wed'=>2,'Thu'=>0,'Fri'=>0,'Sat'=>2]];
//print_r( $arr);
 $a=date('D');
 $d='ip';
 echo $arr[$d][$a];
//echo $arr['ip']['Wednesday'];
?>
<html>
<a href="test3.php">click</a>
</html>