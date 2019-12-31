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
            <nav class="navbar sticky-top navbar-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="../shopping/books.php">Books</a>
                        <a class="nav-item nav-link" href="../profile/profile.php">Profile</a>
                        <a class="nav-item nav-link" href="../contact.html">Contact Us</a>
                        <a class="nav-item btn btn-success" href="signup.html">Signup</a>
                    </div>
                </div>
            </nav>
        </div>

        <!--Sign up form-->
        <div class="w-75 h-100 m-auto p-5">
            <div id="alert" style="display:none" class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Wrong Password!!</strong> Please check the password and type again.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="inputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="inputPassword1">
                </div>
                <div class="row">
                    <div class="col"><button type="submit" name="login"
                            class="btn btn-primary btn-block">Signin</button></div>
                    <div class="col"><a href="signup.html" class="btn btn-outline-primary btn-block">Signup</a></div>
                </div>
            </form>
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
<?php

if (isset($_POST['login'])) {
    include "../database/connect.php";

    $sql = $conn->prepare("Select * from user where email=? and password=?");
    $sql->bind_param("ss", $email, $password);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql->execute();
    $sql->store_result();
    if ($sql->num_rows == 1) {
        echo $sql->num_rows;
    } else {
        ?>
   <script>
       document.getElementById("alert").style.display='block';
   </script>
<?php
}
}
?>