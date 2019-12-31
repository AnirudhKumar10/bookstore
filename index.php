<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

    <!--Landing Page-->
    <div class="container-lg">
        <!--Top Bar-->
        <div style="height: 10px">
        </div>

        <!--Navigation-->
        <div>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="../index.php">
                    <img src="assets/icon_lg.png" alt="">
                    Pustak
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="shopping/books.php">Books</a>
                        <a class="nav-item nav-link" href="shopping/ebooks.php">EBooks</a>
                        <a class="nav-item nav-link" href="profile/profile.php">Profile</a>
                        <a class="nav-item nav-link" href="contact.html">Contact Us</a>
                        <a class="nav-item btn btn-success" href="profile/signup.html">Signup</a>
                    </div>
                </div>
            </nav>
        </div>


        <!--Banner-->
        <div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/banner01.jpg" class="w-75 mx-auto d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/banner02.jpg" class="w-75 mx-auto d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/banner03.jpg" class="w-75 mx-auto d-block" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!--Products Content-->
    <div class="container-lg">
        <div class="row">
            <!--Side Nav-->
            <div class="col-3">
                <div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">CBSE</li>
                        <li class="list-group-item">ICSE</li>
                        <li class="list-group-item">ICS</li>
                        <li class="list-group-item">WB Board</li>
                        <li class="list-group-item">Engineering</li>
                        <li class="list-group-item">Medical</li>
                        <li class="list-group-item">IIT JEE</li>
                        <li class="list-group-item">Commerce</li>
                        <li class="list-group-item">Arts</li>
                        <li class="list-group-item">GATE</li>
                        <li class="list-group-item">CAT</li>
                        <li class="list-group-item">Aptitude</li>
                    </ul>
                </div>
            </div>

            <!--Product view-->
            <div class="col-9">
                <div class="row row-cols-4">
                    <?php
                      for($i=0;$i<10;$i++){
                       echo '<div class="card border-light m-4" style="width: 10rem;">
                       <img src="assets/book.jpg" class="card-img-top" alt="...">
                       <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <a href="#" class="btn btn-primary btn-block">Buy</a>
                       </div>
                       </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <div></div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>