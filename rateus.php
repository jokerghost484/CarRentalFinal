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
  <title>Confirm the Purchase</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e63db42066.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include("navbar.php"); ?>

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

  $rate = "";



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $ghost = TRUE;
      if ($_POST["rate"] != 'Rate Us...') {
        $rate = test_input($_POST["rate"]);
    
      }
      else{
          $ghost = FALSE;
      }
            
    if($_SESSION["status"] == 1){
        if(isset($_POST["rateus"])){
 
              $check = TRUE;
              $cid = $_SESSION["customerid"];
              $sql = "SELECT CustomerID FROM ratingtable";
              $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                if($cid == $row["CustomerID"]){
                    $check = FALSE;
                }
              
              
            }
          } 
              if($check == TRUE){
                $sql ="INSERT INTO ratingtable(CustomerID,Rating) VALUES('$cid','$rate')";
                if ($conn->query($sql) === TRUE) {
                    $check = TRUE;
                  } 
              }
              else{
                $sql ="UPDATE ratingtable SET Rating ='$rate' WHERE CustomerID = '$cid'  ";
                if ($conn->query($sql) === TRUE) {
                    $check = FALSE;
                  } 
              }
              
          
        }
      
        
       }
       else{
           $ghost = FALSE;
       }
       if($ghost == TRUE){
        echo "<script> location.href='index.php'; </script>";
       }
       if($ghost == false){
        echo "<script> alert('You must logged in'); </script>";
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

<form class="m-auto" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<div class="col-md-3 m-auto mt-5" style="text-align: left;">
            <label for="rate" class="form-label mb-4">How good we are?</label>
            <select id="rate" name="rate" class="form-select"  value="<?php echo isset($_POST["rate"]) ? $_POST["rate"] : ''; ?>">
              <option selected>Rate Us...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            
          </div>
          <div div class="col-md-3 m-auto mt-5" style="text-align: left;">
          <input class="btn btn-outline-dark mt-5" type="submit" name="rateus" value="Rate Us">
          </div>
</form>



<?php include("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</body>

</html>