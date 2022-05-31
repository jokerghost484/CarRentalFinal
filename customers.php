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
    <title>List Customers</title>
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
    $kaan = FALSE;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['checkrev'])) {
            $kaan = TRUE;
            if(isset($_POST['flexRadioDefault'])){
                $customerid = $_POST['flexRadioDefault'];
                $_SESSION["cusid"] = $customerid;
            }
            else{
                $kaan = FALSE;
            }
            if($kaan == TRUE){
                echo "<script> location.href='  customerreservation.php'; </script>";
            }
            
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

        <div class="container mt-5">
            <div class="row">

                <div class="col-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            Our Customers
                        </div>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item col-1">Option</li>
                            <li class="list-group-item col-3">Email</li>
                            <li class="list-group-item col-2">Name</li>
                            <li class="list-group-item col-2">City</li>
                            <li class="list-group-item col-2">LicenseID</li>
                            <li class="list-group-item col-2">Age</li>
                            

                        </ul>
                        <?php
                        $sql = "SELECT CustomerID,CustomerEmail,CustomerName,CustomerLicenseID,CustomerAge,CustomerState FROM customertable";

                       /* $sql = "SELECT CONCAT(m.BranchName, ' ', m.CarName) AS Model,c.ModelID,r.CarID,r.Pickupday,r.Dropoffday,c.City,r.Payment,r.ReservationID,
                        r.ReservationTime,q.CustomerName FROM customer r,cartable c,carmodeltable m ,receipttable f,customertable q
            WHERE c.CarID='$carid' AND m.ModelID = c.ModelID AND r.CarID = c.CarID AND r.CustomerID = f.CustomerID AND q.CustomerID = r.CustomerID
            GROUP BY r.ReservationID 
            ORDER BY r.ReservationTime ASC ";*/
                        $result = $conn->query($sql);





                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '
          
          
          
          
          
          <ul class="list-group list-group-horizontal">
          <li class="list-group-item col-1">

          <div class="form-chec mt-3 ml-4">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" value="' . $row["CustomerID"] . '">
<label class="form-check-label" for="flexRadioDefault">

</label> 

</li>
            <li class="list-group-item col-3">' . $row["CustomerEmail"] . '</li>
            <li class="list-group-item col-2">' . $row["CustomerName"] . '</li>
            <li class="list-group-item col-2">' . $row["CustomerState"] . '</li>
            <li class="list-group-item col-2">' . $row["CustomerLicenseID"] . '</li>
            <li class="list-group-item col-2">' . $row["CustomerAge"] . '</li>
           
           
            
            
          </ul>';
                            }
                        }


                        ?>
                        <div class="Cancel-button mx-auto pt-2 pb-2">
                            <input type="submit" class="btn btn-outline-info " name="checkrev" value="Check Reservation">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </form>


    <footer>
        <div class="footer">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 item text">
                            <h3>Ghost Rental</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptatibus, perspiciatis quaerat
                                in
                                eius, temporibus porro praesentium ut autem exercitationem natus mollitia pariatur placeat error
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