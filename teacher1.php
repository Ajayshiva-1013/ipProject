<?php 
session_start();
//Variables to store the result
$id_no=array();
$attended=array();
//
$servername = "localhost";
$username = "ajay";
$password = "";
$dbname = "student attendance";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$q="SELECT id,".$_SESSION['id']. " from attendance" ;
$result= $conn->query($q);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    array_push($id_no, $row['id']);
    array_push($attended, $row[$_SESSION['id']]);
}}
else{
  echo "NO VALID ENTRIES FOUND";
}
?>

<html>
    <head>
            <link rel = "stylesheet" type = "text/css" href = "styles.css" />
            <link rel = "stylesheet" type = "text/css" href = "teacher.css" />
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/e00d939c1e.js" crossorigin="anonymous"></script>

        </head>
    <body style="background-color: #272A41">
    <nav class="navbar sticky-top navbar- bg-light navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <li class="navbar-brand" href="#">ATTENDENCE MODULE</li>
       <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-item nav-c" href="./teacher.php">Daily Attendence</a>
        </li>
        <li>
          <a class="nav-item nav-c" href="./teacher1.php">Student-wise Attendence</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item nav-c nav-r">
          <p class="pt-1">Welcome <?php echo $_SESSION['name']; ?></p>                
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
                        <th >ID</th>
                        <th > Periods Attended</th>
                      </tr>
                    <tbody>
                        <tr>
                        <?php for($i=0; $i<sizeof($id_no); $i++){ ?>
                            <td><?php echo $id_no[$i]; ?></td>
                            <td><?php echo $attended[$i];?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
              </div>
                    
                    
                    
    </body>
</html>