<?php
$conn = new mysqli('localhost', 'root', 'asmit', 'crudoperation');

if (!$conn) {
    die(mysqli_error($conn));
}
