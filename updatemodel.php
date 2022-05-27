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
    if (empty($_POST["newprice"])) {
        $newpriceErr = "Price is required";
        $kaan = FALSE;
      } else {
        $newprice = test_input($_POST["newprice"]);
      }
    if($kaan==TRUE){
        if (isset($_POST['updateprice'])) {
      
       
            if ((isset($_POST["flexRadioDefault"]))) {
              $carid = $_POST['flexRadioDefault'];
              
          }
          else{
            $kaan = FALSE;
    
          }
            
            $sql = "UPDATE carmodeltable SET Price ='$newprice' WHERE ModelID ='$carid'";
            if ($conn->query($sql) === TRUE) {
                
                if($kaan==TRUE){
                    echo "<script> location.href='updatemodel.php'; </script>";
                  }
                
              }
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
              
              Our Models
              
            </div>
            <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-1">Option</li>
              <li class="list-group-item col-3">Model</li>
              <li class="list-group-item col-2">Type</li>
              <li class="list-group-item col-2">Fuel</li>  
              <li class="list-group-item col-2">Size</li>
             
              <li class="list-group-item col-2">Price</li>
              

            </ul>
            <?php
            $modelid = $_SESSION['modelid'];
            $sql = "SELECT CONCAT(BranchName, ' ', CarName) AS Model, CarType,Fuel,CarSize,Price,ModelID FROM carmodeltable GROUP BY ModelID ";
            $result = $conn->query($sql);





            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
          
          
          
          
          
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-1">

              <div class="form-chec mt-3 ml-4">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" value="' . $row["ModelID"] . '">
 <label class="form-check-label" for="flexRadioDefault">
   
 </label> 

</li>
                
<li class="list-group-item col-3">' . $row["Model"] . '</li>
<li class="list-group-item col-2">' . $row["CarType"] . '</li>
<li class="list-group-item col-2">' . $row["Fuel"] . '</li>
<li class="list-group-item col-2">' . $row["CarSize"] . '</li>
<li class="list-group-item col-2">' . $row["Price"] .'$</li>

            
            
            
          </ul>';
              }
            }


            ?>
            <div class="Cancel-button mx-auto pt-2 pb-2">
            
            <label for="inputPrice" class="form-label">New Price</label>
            <input type="name" class="form-control" id="newprice" placeholder="$" name="newprice"  value="<?php echo isset($_POST["newprice"]) ? $_POST["newprice"] : ''; ?>">
         
            <input type="submit" class="btn btn-outline-success " name="updateprice" value="UpdatePrice">
              
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