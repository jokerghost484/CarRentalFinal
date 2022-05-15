<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e63db42066.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php include("navbaradmin.php"); ?>


    <?php

  $servername = "localhost";
  $username = "root";
  $password = "password";
  $dbname = "carweb";

  // Create connection
  $conn = mysqli_connect($servername, $username, null, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  ?>


<?php 
  $kaan = FALSE;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      if (isset($_POST['logoutadmin'])) {
          $_SESSION["statusadmin"] = 0;
          $kaan = TRUE;
      }
      if($kaan==TRUE){
        echo "<script> location.href='index.php'; </script>";
      }

      
      
      
  }

  function test_input($data)
  {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  
  
  
  
  ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4 mt-5">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="card" style="width: 18rem;">
                    <img src="images/ghost3.jpg" class="card-img-top" alt="...">
                    <div class="card-header">
                        MyAccount
                    </div>

                    <?php
            $managerid = $_SESSION['managerid'];
            $sql = "SELECT * FROM managertable WHERE ManagerID='$managerid'";
            $result = $conn->query($sql);





            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
          
                <ul class="list-group list-group-flush">
                <li class="list-group-item">'.$row["ManagerName"].'</li>
                <li class="list-group-item">'.$row["ManagerPosition"].'</li>
              </ul>'
 ;
              }
            }


            ?>
                    <div class="card-body">
                        <a class="btn btn-outline-dark " href="#">Edit Profile Picture</a>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-outline-dark " href="admincreate.php">Create Admin Profile</a>
                    </div>
                    <div class="card-body">
                    <input type="submit" class="btn btn-outline-dark " name="logoutadmin" value="LogOut">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-sm-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> About Me</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, enim ipsam libero veritatis
                            temporibus neque deleniti ex quia saepe animi, porro suscipit cupiditate voluptate nisi
                            consectetur debitis aliquid corporis repellendus at. Maiores velit doloribus autem quae aut
                            consequatur cum ducimus odit, illum amet iure. Quos harum commodi, accusantium quam
                            voluptate sapiente deleniti? Pariatur unde praesentium enim dolorum velit molestias ut
                            deleniti, quod aspernatur modi a nesciunt obcaecati nisi id, cum tenetur, eum in quo
                            recusandae consequatur. Voluptatum voluptatem quibusdam maxime deleniti maiores. Similique
                            optio, incidunt quia accusamus ipsa ullam nisi sapiente ipsum natus corrupti? Dignissimos
                            nostrum impedit rem, eaque possimus illum dolorum doloremque debitis? Aperiam nemo facere
                            quae obcaecati suscipit eos mollitia non optio! Quisquam id eaque molestiae laboriosam
                            aliquid corporis error? Tempora nisi quaerat delectus error perferendis! Accusantium,
                            commodi voluptas. Tempore, expedita! Repudiandae unde minima explicabo nemo recusandae
                            quidem, qui atque adipisci sequi amet iure dolores. Alias earum magni ullam nobis
                            praesentium, unde porro ea ducimus. Laborum quos, quia repellat et, saepe tempora
                            repudiandae sint reprehenderit est tempore nam quidem delectus excepturi modi voluptate
                            earum corporis praesentium, aliquam laboriosam? Suscipit velit et distinctio vel dolor
                            magni, dolorum, cum corrupti maiores modi eius illum facilis dignissimos nihil minima sint
                            unde, quisquam aliquid a! Voluptas error fuga at fugit, eos aut omnis doloremque vel velit
                            magni aspernatur quibusdam qui praesentium odit provident. Aliquam quod nam consequuntur
                            harum in repellendus minima illo velit tempore voluptatibus quia non similique, repudiandae
                            obcaecati nulla amet accusantium, illum delectus maxime dolores! Maxime natus qui voluptatum
                            perspiciatis.</p>
                        <div class="card-body">
                            <a class="btn btn-outline-dark " href="#">Edit About Me</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer>
        <div class="footer">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 item text">
                            <h3>Ghost Rental</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptatibus,
                                perspiciatis quaerat
                                in
                                eius, temporibus porro praesentium ut autem exercitationem natus mollitia pariatur
                                placeat error
                                numquam
                                molestias eos vitae architecto.</p>
                        </div>

                        <p class="copyright">Ghost Rental © 2022</p>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>