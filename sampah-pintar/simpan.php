<?php

include 'config/database.php';

$name     = $_POST['name'];
$email    = $_POST['email'];
$password = md5($_POST['password']);
$phone    = $_POST['phone'];
$role     = $_POST['role'];

$query = "INSERT INTO users
(
    name,
    email,
    password,
    phone,
    role
)

VALUES
(
    '$name',
    '$email',
    '$password',
    '$phone',
    '$role'
)";

mysqli_query($conn, $query);

header("Location:index.php");