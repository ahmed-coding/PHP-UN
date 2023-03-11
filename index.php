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
    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="image" id="image" required>

        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>