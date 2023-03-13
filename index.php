<?php

$query = <<<"query"
CREATE DATABASE IF NOT EXISTS php_un;
query;
$conn = mysqli_connect('localhost', 'root');

if (mysqli_connect_errno()) {
    echo "Error when connected with database and error message" . mysqli_connect_error();
}

mysqli_close($conn);

$query = <<<"query"
CREATE TABLE IF NOT EXISTS users(id INT PRIMARY KEY,first_name CHAR(30), last_name CHAR(30),age Integer, major CHAR(30),Level CHAR(30));
query;

$conn = mysqli_connect('localhost', 'root', null, 'php_un');
if (!mysqli_query($conn, $query)) {
    die('error in create table: ' . mysqli_error($conn));
}

$error_message = '';
$sucsess_message = '';

if ($_POST) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $major = $_POST['major'];
    $level = $_POST['level'];

    if ($age >= 25) {
        $error_message = "Your age is $age this very big to this";
    } elseif ($age <= 5) {
        $error_message = "Your age is $age this very smoll to this";
    }

    $query = <<<"query"
    INSERT INTO users (id,first_name,last_name,major,age ,Level) VALUES ($id, '$first_name', '$last_name', '$major',  $age, ' $level');
query;

    if (mysqli_query($conn, $query)) {
        $sucsess_message = 'Addedd Sucsessfuly';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Template 1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <section class="register-photo">
        <div class="form-container">
            <form method="post">
                <?php if ($error_message) : ?>
                    <div class="d-flex" id="some-message">
                        <div class="content">
                            <p><?php echo $error_message ?></p>
                        </div>
                    </div>
                <?php elseif ($sucsess_message) : ?>
                    <div class="d-flex" id="some-message" style="background-color:green ;">
                        <div class="content">
                            <p style="color: black;"><?php echo $sucsess_message ?></p>
                        </div>
                    </div>
                <?php endif ?>
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="mb-3"><input class="form-control" type="number" name="id" placeholder="ID" required></div>
                <div class="mb-3"><input class="form-control" type="text" name="first_name" placeholder="First Name" required>
                </div>
                <div class="mb-3"><input class="form-control" type="text" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="mb-3"><input class="form-control" type="number" name="age" placeholder="Age" required></div>
                <div class="mb-3"><input class="form-control" type="text" name="major" placeholder="Major" required></div>
                <div class="mb-3"><input class="form-control" type="text" name="level" placeholder="Level" required></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Sign Up</button></div>
            </form>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>