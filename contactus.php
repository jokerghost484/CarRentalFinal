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
  <title>Contact Us</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
 $mesemail =  $message = "";
 $mesemailErr = $message  = "";
 


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $kaan = TRUE;

   
   

   if (empty($_POST["mesemail"])) {
     $mesemailErr = "mesemail is required";
     $kaan = FALSE;
   } else {
     $mesemail = test_input($_POST["mesemail"]);
   }

   if (empty($_POST["message"])) {
     $messageErr = "message is required";
     $kaan = FALSE;
   } else {
     $message = test_input($_POST["message"]);
   }


   if ($kaan == TRUE) {
     $stmt = $conn->prepare("INSERT INTO messagetable (MessageEmail,Message )
      VALUES (?, ?)");
     $stmt->bind_param("ss", $mesemail, $message);

     
     if (isset($_POST['mesemail'])) {
       $mesemail = $_POST["mesemail"];
     }
     if (isset($_POST['message'])) {
       $message = $_POST["message"];
     }
     
     $stmt->execute();
   }

   if ($kaan == TRUE) {
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

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="color: green;   ;font-family: Merriweather, serif" id="exampleModalLabel">
            Message Sent</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="font-family: Merriweather, serif">
          Your message has sent . We will reach you from your email in 24 hours. If you can't get a response in 24 hours
          please message again.
        </div>
        <div class="modal-footer" style="font-family: Merriweather, serif">

          <a class="btn btn-outline-dark" href="index.php">Home</a>
        </div>
      </div>
    </div>
  </div>

  <div class="head-pad mt-5">
    <h2 style="text-align: center;">Tell Us Your Problems and Ideas</h2>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-10">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="mesemail" value="<?php echo isset($_POST["mesemail"]) ? $_POST["mesemail"] : ''; ?>">
        </div>
        <div class="mb-3 mt-5">
          <label for="exampleComment" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="3" name="message" value="<?php echo isset($_POST["message"]) ? $_POST["message"] : ''; ?>"></textarea>
        </div>
        <div class="row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4"><input class="btn btn-outline-info mt-5" type="submit" name="send" value="Send message"></div>
  </div>
  
        
       
        </form>
      </div>
      <div class="col">

      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>