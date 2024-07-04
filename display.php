<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM crud"; // Use backticks or no quotes at all
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $address = $row['address'];
                        echo "<tr>
                        <th scope='row'>$id</th>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$phone</td>
                        <td>$address</td>
                        <td>
                        <button class='btn btn-primary'><a href='update.php?update_id=$id'      class='text-light'>Update</a></button>
                        <button class='btn btn-danger'><a href='delete.php?delete_id=$id' class='text-light'>Delete</a></button></td>
                        </tr>";
                    }
                }
                ?>


            </tbody>
        </table>
    </div>

</body>

</html>