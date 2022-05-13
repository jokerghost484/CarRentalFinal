<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e63db42066.js" crossorigin="anonymous"></script>

  <script>

    function show(shown, hidden) {
      // Yapabilirsem fonksiyonu düzenlicem ama şu an bir takım zorluklar yaşıyorum.
      var Page1 = document.getElementById(shown).style.display = 'block';
      var Page2 = document.getElementById(hidden).style.display = 'none';
      return false
    }
  </script>
</head>

<body>
<?php include("navbar.php"); ?>


  <div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-6 mt-5">
          <h2>Your Favorite Car</h2>
          <div class="card mb-3 mt-5">
            <img src="images/ford-mustang-gt-2015-background-1080p-443589.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mustang</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsam, commodi,
                officiis, fugit cumque corrupti eius perferendis enim libero minus corporis quas voluptas ex architecto
                delectus est! Distinctio, soluta itaque.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="col">
        </div>
        <div class="col mt-5">
          <div class="card" style="width: 18rem;">
            <div class="card-header">
              MyAccount
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Kaan Akgün</li>
              <li class="list-group-item">19-25</li>
              <li class="list-group-item">License id : 666</li>
              <li class="list-group-item">Venice</li>
            </ul>
            <div class="card-body">
              <a class="btn btn-outline-dark " href="bookings.php">Bookings</a>
            </div>
            <div class="card-body">
              <a class="btn btn-outline-dark " href="#" onclick=" show('Page1','Page2');">Log Out</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col">

        </div>
        <div class="col-9 mt-5">
          <h2 style="text-align: center;">Favorite Place</h2>
          <div class="card mb-3 mt-5">
            <img src="images/tokyo-background-full-hd-484990.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Japan</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ullam praesentium
                ducimus alias tempore corrupti numquam magnam aspernatur laboriosam totam itaque, ea iusto et nostrum
                facere officiis expedita quasi nesciunt nulla mollitia consectetur fuga. Accusamus omnis, tenetur odio
                alias debitis, nobis tempore exercitationem fugiat numquam architecto eaque, nulla natus molestiae
                dicta. Animi nesciunt vero neque expedita, molestiae eum repudiandae distinctio?</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="col">

        </div>
      </div>
    </div>

  </div>




  <?php include("footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>