<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Car</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    $modelid = $modelidErr = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kaan = TRUE;


        if (isset($_POST['modelselect'])) {
            if ((!isset($_POST["flexRadioDefault"]))) {
                $modelidErr = "RadioButton is required";
                $kaan = FALSE;
            } else {
                $modelid = test_input($_POST["flexRadioDefault"]);
                $modelid = $_POST['flexRadioDefault'];
                $_SESSION["modelid"] = $modelid;
            }
        } else {
            $kaan = FALSE;
        }

        if ($kaan == TRUE) {

            echo "<script> location.href='deletemodelscar.php'; </script>";
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




    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


        <?php
        $sql = "SELECT * FROM carmodeltable ";
        $result = $conn->query($sql);




        if ($result->num_rows == 0) {
            $kaan = FALSE;
        } else if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                echo '<div class="container mt-5">
            <div class="row ">
                <div class="col-sm-4 mt-5">
                    <div class="card" style="width: 18rem;">
                        <img src="images/mercedes-benz-background-1080p-362844.jpg" class="card-img-top" alt="mercedes">
                        <div class="card-body">
                        <h4 class="card-title">' . $row["BranchName"] . '</h4>
                            <h5 class="card-title">' . $row["CarName"] . '</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">' . $row["CarType"] . '</li>
                        <li class="list-group-item">' . $row["Fuel"] . '</li>
                        <li class="list-group-item">' . $row["CarSize"] . '   <i class="fa-solid fa-user"></i></li>
                        
                        </ul>
      
                    </div>
                </div>
                <div class="col-sm-8 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> Services </h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="text-align: left;">
                                    <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Culpa sed earum quia corrupti
                                    inventore maiores.
                                </li>
                                <li class="list-group-item" style="text-align: left;">
                                    <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, sequi.
                                </li>
                                <li class="list-group-item" style="text-align: left;">
                                    <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Aliquid.
                                </li>
                                <li class="list-group-item" style="text-align: left;">
                                    <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quas cum architecto?
                                </li>
                                <li class="list-group-item" style="text-align: left;">
                                    <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                    ipsum dolor sit amet.
                                </li>
                                <li class="list-group-item" style="text-align: left;">
                                    <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem,
                                    ipsum.
                                </li>
      
      
                  
                                  <div class="form-chec mt-3 ml-4">
                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" value = "' . $row["ModelID"] . '">
                   <label class="form-check-label" for="flexRadioDefault1">
                     ' . $row["Price"] . '
                   </label>
                      </div>
                                 
                                  
                                   
                    
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>';
            }
        }

        ?>
        <div class="Cancel-button mx-auto pt-2 pb-2">
            <input type="submit" class="btn btn-outline-danger " name="modelselect" value="List Car Models For Delete">
        </div>
    </form>


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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>