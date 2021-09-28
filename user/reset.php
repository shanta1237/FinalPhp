<?php include "../includes/db.php"; ?>
<?php include "includes/user_header.php"; ?>
<?php
//echo $_SESSION['s_id'];

$curr_user_id = $_SESSION['s_id'];
$query = "SELECT * FROM users WHERE user_id = $curr_user_id ";
$select_users = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_users)) {
    $user_password = $row['user_password'];
}
if (isset($_POST['update-user'])) {
    $user_password = $_POST['user_password'];

    $query = "UPDATE users SET user_password='{$user_password}' WHERE user_id=$curr_user_id";

    $update_bus = mysqli_query($connection, $query);

    if (!$update_bus) {
        die("Query Failed" . mysqli_error($connection));
    }
}

?>
<!-- Navigation -->
<?php include "includes/user_navigation.php"; ?>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center align-items-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="../images/logo.jpg" alt="bootstrap 4 login page">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Reset Password</h4>
                            <form method="POST" class="my-login-validation" novalidate="">
                                <div class="form-group">
                                    <label for="new-password">New Password</label>
                                    <input id="new-password" type="password" class="form-control" name="user_password" required autofocus data-eye>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                    <div class="form-text text-muted">
                                        Make sure your password is strong and easy to remember
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" name="update-user" class="btn btn-primary btn-block">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/user_footer.php"; ?>