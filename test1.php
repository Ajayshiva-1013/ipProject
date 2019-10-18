<?php
session_start();

if(isset($_SESSION['id'])){


print_r($_SESSION);
}
else{
    header("Location:login1.php");
}

?>
<html>

<a href="test2.php">click</a>
</html>
