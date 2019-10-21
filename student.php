<html>
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
  $q="SELECT * from attendance where id= ". $_SESSION['id'];
  $result= $conn->query($q);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $ip=$row['ip'];
    $cns=$row['cns'];
    $toc=$row['toc'];
    $ds=$row['ds'];
    $gm=$row['gm'];
    $ipl=$row['ipl'];
    $gml=$row['gml'];
    $cnsl=$row['cnsl'];
  }}
  else{
    echo "NO VALID ENTRIES FOUND";
  }
  ?>
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
        <!-- <li class="nav-item">
          <a class="nav-item nav-c" href="#">Daily Attendence</a>
        </li>
        <li>
          <a class="nav-item nav-c" href="./teacher1.php">Student-wise Attendence</a>
        </li> -->
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item nav-c nav-r">
          <p class="pt-1">Welcome <?php echo $_SESSION['name']; ?></p>                
        </li>
          <li class="nav-item nav-c nav-r">
            <a class="nav-item nav-c"  href="./login1.html">
              <i class="fas fa-sign-out-alt pl-1 pr-0 ml-3 pt-2"></i>
            </a>
          </li>
      </ul>
    </div>
  </nav>
                <div class="container">

                  <table class="table table-striped border-success mt-4" style="background-color: rgb(107, 175, 252)">
                      <tr>
                        <th >Subject</th>
                        <th > Periods Attended</th>
                      </tr>
                    <tbody>
                        <tr>
                            <td>Internet Programming</td>
                            <td style="font-weight:900;"><?php echo $ip?></td>
                        </tr>
                        <tr>
                            <td>Computer Network Security</td>
                            <td style="font-weight:900;"><?php echo $cns?></td>
                        </tr>
                        <tr>
                            <td>Theory Of Computation</td>
                            <td style="font-weight:900;"><?php echo $toc?></td>
                        </tr>
                        <tr>
                            <td>Distributed System</td>
                            <td style="font-weight:900;"><?php echo $ds?></td>
                        </tr>
                        <tr>
                            <td>Graphics and Multimedia</td>
                            <td style="font-weight:900;"><?php echo $gm?></td>
                        </tr>
                        <tr>
                            <td>Internet Programming Lab</td>
                            <td style="font-weight:900;"><?php echo $ipl?></td>
                        </tr>
                        <tr>
                            <td>Computer and Network Security Lab</td>
                            <td style="font-weight:900;"><?php echo $gml?></td>
                        </tr>
                        <tr>
                            <td>Graphics and Multimedia Lab</td>
                            <td style="font-weight:900;"><?php echo $cnsl?></td>
                        </tr>


                      </tbody>
                    </table>
                </div>       
    </body>
</html>