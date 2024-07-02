<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO crud (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data inserted";
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <div class="form-group my-5">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                <label>Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="Enter Your Number">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Your Address">

            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>

</body>

</html>