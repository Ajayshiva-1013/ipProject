<?php
session_start();
$name=array();
$id_no=array();
$ip=array();
$cns=array();
$toc=array();
$ds=array();
$gm=array();
$ipl=array();
$gml=array();
$cnsl=array();
//
$servername = "localhost";
$username = "ajay";
$password = "";
$dbname = "student attendance";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$q="SELECT * from attendance" ;
$result= $conn->query($q);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    array_push($id_no, $row['id']);
    array_push($ip, $row['ip']);
    array_push($cns, $row['cns']);
    array_push($toc, $row['toc']);
    array_push($ds, $row['ds']);
    array_push($gm, $row['gm']);
    array_push($ipl, $row['ipl']);
    array_push($gml, $row['gml']);
    array_push($cnsl, $row['cnsl']);
  }}
$q="SELECT namee from stu_login" ;
$result= $conn->query($q);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    array_push($name,$row['namee']);
  }}
?>
<!DOCTYPE html>
<head>
        <link rel = "stylesheet" type = "text/css" href = "login.css" />
        <link rel = "stylesheet" type = "text/css" href = "styles.css" />
        <link rel= "stylesheet" type="text/css" href= "admin.css" />
        <script src="jquery.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/e00d939c1e.js" crossorigin="anonymous"></script>

      <style>
        a{
          color:black;
        }
      </style>
</head>
<body style="background-image: none;">
        <nav class="navbar sticky-top navbar- bg-light navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <li class="navbar-brand" href="#">ATTENDENCE MODULE</li>
             <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  nav-item" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Student</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./addstudent.html">Add Student</a>
                    <a class="dropdown-item" href="./deletestudent.html">Delete Student</a>
                </div>    
                <li class="pt-2">
                  <a class="nav-item nav-c" href="./addattendence.html">Add Attendence</a>
                </li>
               <li class="pt-2">
                <a class="nav-item nav-c " href="./admin_view.php">Consolidated Attendence</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item nav-c nav-r">
                <p class="pt-1">Welcome Admin</p>                
              </li>
                <li class="nav-item nav-c nav-r">
                  <a class="nav-item nav-c"  href="./login1.html">
                    <i class="fas fa-sign-out-alt pl-1 pr-0 ml-5 pt-2"></i>
                  </a>
                </li>
            </ul>
          </div>
        </nav>
        <div class="container">

                <table class="table table-striped border-success mt-4" style="background-color: rgb(107, 175, 252)">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>IP</th>
                        <th>CNS</th>
                        <th>TOC</th>
                        <th>DS</th>
                        <th>GM</th>
                        <th>IP Lab</th>
                        <th>GM Lab</th>
                        <th>CNS Lab</th>
                      </tr>
                    <tbody>
                        <tr>
                        <?php for($i=0; $i<sizeof($id_no); $i++){ ?>
                            <td><?php echo $id_no[$i]; ?></td>
                            <td><?php echo $name[$i]; ?></td>
                            <td><?php echo $ip[$i];?></td>
                            <td><?php echo $cns[$i];?></td>
                            <td><?php echo $toc[$i];?></td>
                            <td><?php echo $ds[$i];?></td>
                            <td><?php echo $gm[$i];?></td>
                            <td><?php echo $ipl[$i];?></td>
                            <td><?php echo $gml[$i];?></td>
                            <td><?php echo $cnsl[$i];?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
              </div>
</body>
</html>