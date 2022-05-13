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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e63db42066.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include("navbaradmin.php"); ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-family: Merriweather, serif" id="exampleModalLabel">Delete Car
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="font-family: Merriweather, serif">
                    Are you sure about this? You are going to delete this car from our system. You can't undo this
                    process.
                </div>
                <div class="modal-footer" style="font-family: Merriweather, serif">

                    <a class="btn btn-outline-danger" href="admin.php">Yes</a>
                    <a class="btn btn-outline-info" href="deletecar.php">No</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row ">
            <div class="col-sm-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/mercedes-benz-background-1080p-362844.jpg" class="card-img-top" alt="mercedes">
                    <div class="card-body">
                        <h5 class="card-title">Mercedes</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Automatic</li>
                        <li class="list-group-item">Petrol</li>
                        <li class="list-group-item">4 <i class="fa-solid fa-user"></i></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Features of Car</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Culpa sed earum quia corrupti
                                inventore maiores.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, sequi.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Aliquid.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quas cum architecto?
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem,
                                ipsum.
                            </li>

                            <a class="btn btn-outline-dark mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                href="#">Delete Car</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row ">
            <div class="col-sm-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/sports-car-background-hd-1920x1080-329208.jpg" class="card-img-top" alt="peugeot">
                    <div class="card-body">
                        <h5 class="card-title">Peugeot</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Automatic</li>
                        <li class="list-group-item">Petrol</li>
                        <li class="list-group-item">2 <i class="fa-solid fa-user"></i></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Features of Car</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Culpa sed earum quia corrupti
                                inventore maiores.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, sequi.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Aliquid.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quas cum architecto?
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem,
                                ipsum.
                            </li>

                            <a class="btn btn-outline-dark mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                href="#">Delete Car</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row ">
            <div class="col-sm-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/range-rover-background-full-hd-1080p-162906.jpg" class="card-img-top"
                        alt="range-rover">
                    <div class="card-body">
                        <h5 class="card-title">Range Rover</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Automatic</li>
                        <li class="list-group-item">Petrol</li>
                        <li class="list-group-item">6 <i class="fa-solid fa-user"></i></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Features of Car</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Culpa sed earum quia corrupti
                                inventore maiores.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, sequi.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Aliquid.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quas cum architecto?
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem,
                                ipsum.
                            </li>

                            <a class="btn btn-outline-dark mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                href="#">Delete Car</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row ">
            <div class="col-sm-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/honda-wallpaper-hd-1080p-256995.jpg" class="card-img-top" alt="honda">
                    <div class="card-body">
                        <h5 class="card-title">Honda</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Automatic</li>
                        <li class="list-group-item">Petrol</li>
                        <li class="list-group-item">4 <i class="fa-solid fa-user"></i></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Features of Car</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Culpa sed earum quia corrupti
                                inventore maiores.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, sequi.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Aliquid.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quas cum architecto?
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem,
                                ipsum.
                            </li>

                            <a class="btn btn-outline-dark mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                href="#">Delete Car</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row ">
            <div class="col-sm-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/ford-mustang-gt-2015-background-1080p-443589.jpg" class="card-img-top"
                        alt="mustang">
                    <div class="card-body">
                        <h5 class="card-title">Mustang</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Automatic</li>
                        <li class="list-group-item">Petrol</li>
                        <li class="list-group-item">3 <i class="fa-solid fa-user"></i></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Features of Car</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Culpa sed earum quia corrupti
                                inventore maiores.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, sequi.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Aliquid.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quas cum architecto?
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem,
                                ipsum.
                            </li>

                            <a class="btn btn-outline-dark mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                href="#">Delete Car</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row ">
            <div class="col-sm-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/kia-optima-wallpaper-1080p-194340.jpg" class="card-img-top" alt="kia">
                    <div class="card-body">
                        <h5 class="card-title">Kia</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Automatic</li>
                        <li class="list-group-item">Petrol</li>
                        <li class="list-group-item">4 <i class="fa-solid fa-user"></i></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Features of Car</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Culpa sed earum quia corrupti
                                inventore maiores.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, sequi.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Aliquid.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quas cum architecto?
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                                ipsum dolor sit amet.
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem,
                                ipsum.
                            </li>

                            <a class="btn btn-outline-dark mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                href="#">Delete Car</a>
                        </ul>
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