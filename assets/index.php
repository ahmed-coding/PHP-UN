<?php

if (isset($_POST['submit'])) {
    $image = $_FILES['image'];

    echo '<pre>';
    print_r($image);
    echo '</pre>';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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