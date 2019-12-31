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
                <a class="navbar-brand" href="../index.php">
                    <img src="../assets/icon_lg.png" alt="">
                    Pustak
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="../index.php">Home</a>
                        <a class="nav-item nav-link" href="../shopping/books.php">Books</a>
                        <a class="nav-item nav-link" href="../shopping/ebooks.php">Ebooks</a>
                        <a class="nav-item nav-link" href="../contact.html">Contact Us</a>
                        <a class="nav-item btn btn-success" href="signout.php">Sign out</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!--Products Content-->
    <div class="container-lg">
        <div class="row">
            <!--Side Nav-->
            <div class="col-3">

                <!--Profile image-->
                <div>
                    <img src="../assets/profile.png" class="d-block w-100 m-2" alt="...">
                    <button class="btn btn-primary btn-block m-2">Change Photo</button>
                    <button class="btn btn-outline-primary btn-block m-2">Delete Photo</button>
                </div>

                <!--Profile Options-->
                <div>
                    <ul class="list-group list-group-flush m-2">
                        <li class="list-group-item p-0">
                            <button class="btn" onclick="showElement(1)">My Orders</button>
                        </li>
                        <li class="list-group-item p-0">
                            <button class="btn" onclick="showElement(2)">Payment Methods</button>
                        </li>
                        <li class="list-group-item p-0">
                            <button class="btn" onclick="showElement(3)">Wishlist</button>
                        </li>
                        <li class="list-group-item p-0">
                            <button class="btn" onclick="showElement(4)">Add Books</button>
                        </li>
                        <li class="list-group-item p-0">
                            <button class="btn" onclick="showElement(5)">Show Added Books</button>
                        </li>
                        <li class="list-group-item p-0">
                            <button class="btn" onclick="showElement(6)">Change Password</button>
                        </li>
                        <li class="list-group-item p-0">
                            <button class="btn" onclick="showElement(7)">My Cart</button>
                        </li>
                        <li class="list-group-item p-0">
                            <button class="btn">Logout</button>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Account view-->
            <div class="col-9 my-auto">

                <!--Add Books-->
                <div id="addBooks" style="display:block" class="w-75 mx-auto">
                    <div id="addbookSuccess" class="alert alert-success alert-dismissible fade show" role="alert"
                        style="display:none">
                        <strong>Congrats!!</strong>The book is added.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="addbookFail" class="alert alert-danger alert-dismissible fade show" role="alert"
                        style="display:none">
                        <strong>Sorry!!</strong>There was some error. Please try again.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="profile.php" method="POST">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" class="form-control" id="author" name="author">
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                            <div class="form-group col">
                                <label for="bookType">Ebook/Paperback</label>
                                <select class="form-control" id="bookType" name="bookType">
                                    <option value="ebook">Ebook</option>
                                    <option value="paperback">Paperback</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bookPhoto">Upload Photo (Optional)</label>
                            <input type="file" class="form-control-file" id="bookPhoto" name="bookPhoto">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary btn-block" name="addBook" type="submit">Add Book</button>
                    </form>
                </div>

                <!--Change Password-->
                <div id="changePassword" style="display:none" class="w-75 mx-auto">
                    <div id="changepasswordSuccess" class="alert alert-success alert-dismissible fade show" role="alert"
                        style="display:none">
                        <strong>Password</strong>Changed.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="changepasswordFail" class="alert alert-danger alert-dismissible fade show" role="alert"
                        style="display:none">
                        <strong>Sorry!!</strong>There was some error. Please try again.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="profile.php" method="POST">
                        <div class="form-group">
                            <label for="currentPassword">Current Password</label>
                            <input type="password" class="form-control" id="currentPassword" name="currentPassword">
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" class="form-control" id="newPassword" name="newPassword">
                        </div>
                        <div class="form-group">
                            <label for="conPassword">Confirm New Password</label>
                            <input type="password" class="form-control" id="conPassword">
                        </div>
                        <button class="btn btn-primary btn-block" name="changePassword" type="submit">Change
                            Password</button>
                    </form>
                </div>

                <!--Payment Method-->
                <div id="paymentmethod" style="display:none" class="w-75 mx-auto">
                    Payment Method
                </div>

                <!--Show Added Books-->
                <div id="showBooks" style="display:none" class="w-75 mx-auto">
                    Show Added Books
                </div>

                <!--My Cart-->
                <div id="mycart" style="display:none" class="w-75 mx-auto">
                    My Cart
                </div>

                <!--Wishlist-->
                <div id="wishlist" style="display:none" class="w-75 mx-auto">
                    Wishlist
                </div>

                <!--My Orders-->
                <div id="myorder" style="display:none" class="w-75 mx-auto">
                    My Orders
                </div>

            </div>
        </div>
    </div>

    <!--Footer-->
    <div></div>


    <script src="../js/buttons.js"></script>
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
include "../database/connect.php";

if (isset($_POST['changePassword'])) {
    $stmt=$conn->prepare("UPDATE user SET password =? WHERE user.id = 1");
    $stmt->bind_param("s",$password);
    $password=$_POST['newPassword'];
    if ($stmt->execute()) {
        ?>
<script>
    document.getElementById('changepasswordSuccess').style.display = 'block';
    showElement(6);
</script>
<?php
} else {
        ?>
<script>
    document.getElementById('changepasswordFail').style.display = 'block';
    showElement(6);
</script>
<?php }

    $stmt->close();
    $conn->close();

}

if (isset($_POST['addBook'])) {
    $stmt = $conn->prepare("INSERT INTO books(id, title, author, price, description, photo_link, type) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("issssss", $id, $title, $author, $price, $desc, $photo, $type);
    $id = "NULL";
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $photo = "";
    $type = $_POST['bookType'];
    if ($stmt->execute()) {
        ?>
<script>
    document.getElementById('addbookSuccess').style.display = 'block';
</script>
<?php
} else {
        ?>
<script>
    document.getElementById('addbookFail').style.display = 'block';
</script>
<?php }

    $stmt->close();
    $conn->close();
}

?>