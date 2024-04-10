<?php
require('./connection/connect.php');
require('function.inc.php');
$msg = '';

if(isset($_POST['submit'])) {
    $username = isset($_POST['username']) ? get_safe_value($conn, $_POST['username']) : '';
    $password = isset($_POST['password']) ? get_safe_value($conn, $_POST['password']) : '';

    if(empty($username) || empty($password)) {
        $msg = "Please enter both username and password";
    } else {
        $sql = "SELECT * FROM admin_user WHERE username = '$username' AND password = '$password'";
        $res = mysqli_query($conn, $sql);

        if($res) {
            $count = mysqli_num_rows($res);

            if($count > 0) {
                session_start();
                $_SESSION['ADMIN_LOGIN'] = 'yes';
                $_SESSION['ADMIN_USERNAME'] = $username;
                header('location:index.php');
                exit();
            } else {
                $msg = "Incorrect username or password";
            }
        } else {
            $msg = "Query execution error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link rel="stylesheet" href="/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">

                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Login page</h1>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">Username</label>
                                    <input id="email" type="text" name= 'username'class="form-control" required>
                                    <div class="invalid-feedback">
                                        Username is invalid
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="align-items-center d-flex">
                                    <button type="submit" name= 'submit'class="btn btn-primary ms-auto">
                                        Sign in
                                    </button>
                                </div>
                                <?php echo $msg?>
                            </form>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </section>

</body>

</html>