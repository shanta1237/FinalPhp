<?php include "includes/db.php"; ?>

<?php

if (isset($_POST['register'])) {
    //echo "registered";
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];

    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_image, "images/$image");
    if ($image == "") {
        $image = "user_default.jpg";
    }

    if ($username == "" || $firstname == "" || $lastname == "" || $email == "" || $phone_no == "" || $image == "" || $password == "") {
        # code...
        echo "**ALL FIELDS MANDATORY";
    } elseif (strlen($phone_no) != 10) {
        # code...
        echo "**PhoneNo Must Contain Of 10 bits";
    } else {

        $query = "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_phoneno, user_role, user_image) VALUES('$username', '$password', '$firstname', '$lastname', '$email', '$phone_no', 'subscriber', '$image') ";

        $register_user = mysqli_query($connection, $query);

        if (!$register_user) {
            die("Query Failed" . mysqli_error($connection));
        }

        header("Location: user/index.php");
    }
}

?>

<!-- Page Content -->
<!-- <div class="container jumbotron" style="width: 45%; border-radius: 15px"> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="images/logo.jpg" alt="bootstrap 4 login page">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Register</h4>
                            <form method="POST" class="my-login-validation" novalidate="">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" name="username" placeholder="Enter User name" required autofocus>
                                    <div class="invalid-feedback">
                                        What's your name?
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter First name" name="firstname" required autofocus>
                                    <div class="invalid-feedback">
                                        What's your name?
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter Lastname" name="lastname" required autofocus>
                                    <div class="invalid-feedback">
                                        What's your Last name?
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bus-image">UserImage</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" placeholder="Enter email" name="email" required>
                                    <div class="invalid-feedback">
                                        Your email is invalid
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Phone Number</label>
                                    <input id="pwd" type="text" class="form-control" placeholder="Enter password" name="phone_no" required autofocus>
                                    <div class="invalid-feedback">
                                        What's your phone Number?
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" placeholder="Enter password" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
                                        <label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
                                        <div class="invalid-feedback">
                                            You must agree with our Terms and Conditions
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" name="register" class="btn btn-primary btn-block">
                                        Register
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    Already have an account? <a href="index.php">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/my-login.js"></script>
</body>

</html>
