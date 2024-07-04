<?php
include 'connect.php';

if (isset($_GET['update_id'])) {
    $id = $_GET['update_id'];

    // Fetch the existing data for the given ID
    $sql = "SELECT * FROM `crud` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
    } else {
        die('Record not found');
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Prepare the SQL statement to prevent SQL injection
    $sql = "UPDATE crud SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>CRUD Operation</title>
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <div class="form-group my-5">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $name; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $email; ?>">
                <label>Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="Enter Your Number" value="<?php echo $phone; ?>">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Your Address" value="<?php echo $address; ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>