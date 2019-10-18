<?php
session_start();
$l=[1,2,3,4,5,6,7,8,9,10];
$name=['Aakash','Aparna','Abinash Raj','Abinaya','Abirami','Adhavan','Aditya','Aditya Ramesh','Aishwarya D','Aishwarya P S'];
?>
<html>
    <head>
            <script>
              function resetColor(a){
                var p=document.getElementById(a);
                p.style.backgroundColor="#fff";
                $.ajax({
                url:'teacher_reset.php',
                method:'POST',
                data:{button:a},
                success:function(data){
                    alert(data);
                  }});
              }
              function setColor(a){
                  var p=document.getElementById(a);
                  p.style.backgroundColor="#000";
                  $.ajax({
                  url:'teacher_server.php',
                  method:'POST',
                  data:{button:a},
                  success:function(data){
                    console.log(a);
                  }});
              }
            </script>
            <link rel = "stylesheet" type = "text/css" href = "styles.css" />
            <link rel = "stylesheet" type = "text/css" href = "teacher.css" />
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>  
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/e00d939c1e.js" crossorigin="anonymous"></script>

        </head>
    <body style="background-color: #F5E6CC">
      <nav class="navbar sticky-top navbar- bg-light navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <li class="navbar-brand" href="#">ATTENDENCE MODULE</li>
       <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-item nav-c" href="#">Daily Attendence</a>
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
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto d-flex ">
                        
                      </ul>
                      <ul class="navbar-nav">
                        
                    </div>
                  </nav>
                <div class="container">
                <form >
                  <table class="table table-striped border-success mt-4" style="background-color: #17E9E0">
                    <thead>
                      <tr>
                        <th scope="col">R.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Present</th>
                        <th scope="col">Reset</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php for ($i = 0; $i < sizeof($l);$i++){ ?>
                        <tr>
                          <th scope="row"><?php echo $l[$i]; ?></th>
                          <td><?php echo $name[$i];?></td>
                          <td ><button type="button" class="btn" name="<?php echo $l[$i] ?>" id= <?php echo $l[$i] ?> onClick="setColor(<?php echo $l[$i] ?>)" style="background-color:#f8f9fa"><i class="far fa-check-circle"></i></button></td>
                          <td><button type="button" class="btn" name="<?php echo $l[$i] ?>s"  onClick="resetColor(<?php echo $l[$i] ?>)" style="background-color:#f8f9fa"><i class="fas fa-redo-alt"></i></button></td>
                    <?php };?>
                        </tr>
                      </tbody>
                    </table>
              </div>
                    
                    </form>
              
    </body>
</html>


 

