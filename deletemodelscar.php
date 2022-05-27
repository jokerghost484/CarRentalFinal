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
  <title>Update Car</title>
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
  $carid = $caridErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kaan = TRUE;
    
    
    if (isset($_POST['deletecar'])) {
      
        $kaan = TRUE;
        if ((isset($_POST["flexRadioDefault"]))) {
          $carid = $_POST['flexRadioDefault'];
          $kaan = TRUE;
      }
      else{
        $kaan = FALSE;

      }
        
        $sql = "DELETE FROM cartable WHERE CarID ='$carid'";
    }
    if ($conn->query($sql) === TRUE) {
        if($kaan==TRUE){
          echo "<script> location.href='deletemodelscar.php'; </script>";
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
              <?php 
              $modelid = $_SESSION['modelid'];
              $title = "SELECT CONCAT(BranchName, ' ', CarName) AS Model FROM carmodeltable WHERE ModelID = $modelid";
              $res = $conn->query($title);
              if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
              echo ' '.$row["Model"].' Cars  ';
            }
          }
              ?>
            </div>
            <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-1">Option</li>
              <li class="list-group-item col-2">CarNumber</li>
              <li class="list-group-item col-2">Type</li>
              <li class="list-group-item col-2">Fuel</li>  
              <li class="list-group-item col-1">Size</li>
              <li class="list-group-item col-2">City</li>
              <li class="list-group-item col-1">Price</li>
              <li class="list-group-item col-1">Status</li>

            </ul>
            <?php
            $modelid = $_SESSION['modelid'];
            $sql = "SELECT CONCAT(c.CarLetter, ' ', c.CarID) AS CarNumber,m.CarType,m.Fuel,m.CarSize,m.Price,c.CarID,c.ModelID,c.CarStatus,c.City FROM cartable c,carmodeltable m WHERE m.ModelID =$modelid AND m.ModelID = c.ModelID";
            $result = $conn->query($sql);





            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
          
          
          
          
          
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-1">

              <div class="form-chec mt-3 ml-4">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" value="' . $row["CarID"] . '">
 <label class="form-check-label" for="flexRadioDefault">
   
 </label> 

</li>
                
<li class="list-group-item col-2">' . $row["CarNumber"] . '</li>
<li class="list-group-item col-2">' . $row["CarType"] . '</li>
<li class="list-group-item col-2">' . $row["Fuel"] . '</li>
<li class="list-group-item col-1">' . $row["CarSize"] . '</li>
<li class="list-group-item col-2">' . $row["City"] . '</li>
<li class="list-group-item col-1">' . $row["Price"] .'$</li>
<li class="list-group-item col-1">' . $row["CarStatus"] .'</li>
            
            
            
          </ul>';
              }
            }


            ?>
            <div class="Cancel-button mx-auto pt-2 pb-2">
            <input type="submit" class="btn btn-outline-danger " name="deletecar" value="Delete">
              
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>