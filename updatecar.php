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

$carid =  "";
  $caridErr  ="";
  


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kaan = TRUE;

    if (empty($_POST["carid"])) {
      $caridErr = "CarID is required";
      $kaan = FALSE;
    } else {
      $carid = test_input($_POST["carid"]);
    }

    if(isset($_POST["submit"])){


      if(!empty($_FILES["image"]["carid"])){
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 

        if(in_array($fileType, $allowTypes)){
          $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));

            // Insert image content into database 
            $insert = $db->query("UPDATE cartable SET Carimmage VALUES ('$imgContent') WHERE CarID = $carid"); 
        }
      }
      /*if ($kaan == TRUE) {
        $sql ="INSERT INTO cartable (Carimage) VALUES ('') WHERE carid = '$carid";
       
  
        
      }*/
    }
    

    if ($kaan == TRUE) {
      echo "<script> location.href='admin.php'; </script>";
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
?>


  <div class="container mt-5">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-9">
      <form action="admin.php" method="post" enctype="multipart/form-data">
      <div class="card" style="width: 18rem;">
        
        <img src="images/No-Image-Found-400x264.png" class="card-img-top" alt="honda">
        <div class="card-body">
          <p class="card-text">Please add a car image about car you are going to add. </p>
          <div class="col" style="text-align: left;">
            <label for="inputCarName" class="form-label">Car ID</label>
            <input type="name" class="form-control" id="carname" name="carname"  value="<?php echo isset($_POST["carname"]) ? $_POST["carname"] : ''; ?>">
          </div>
        </div>
        <label>Select Image File:</label>
      <input type="file" name="image">
      <input type="submit" name="submit" value="Upload">

      </div>
      
    </form>
      <div class="col">

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