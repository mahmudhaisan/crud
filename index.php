<?php
require_once('functions.php');
$new = new CrudUsers();

if (isset($_POST['submit'])) {

    $showMsg = $new->usersInfo($_POST);
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Users Info</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <h1 class="mt-5 p-2 bg-dark text-white"> User Information</h1>
            <?php if (isset($showMsg)) {
                echo $showMsg;
            } ?>
            <form action="all-users.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Name">Your Name</label>
                    <input name='name' type="text" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input name='email' type="text" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input name='phone' type="text" class="form-control" placeholder="Enter Your phone">
                </div>
                <div class="form-group">
                    <label for="image">Your Image</label>
                    <input name='pic' type="File" class="form-control-file">
                </div>
                <input type="submit" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>