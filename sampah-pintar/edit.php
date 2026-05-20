<?php

include 'config/database.php';

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM users WHERE id='$id'"
);

$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit User</h2>

    <form action="" method="POST">

        <div class="mb-3">
            <label>Nama</label>

            <input type="text"
                   name="name"
                   class="form-control"
                   value="<?= $row['name'] ?>">
        </div>

        <div class="mb-3">
            <label>Email</label>

            <input type="email"
                   name="email"
                   class="form-control"
                   value="<?= $row['email'] ?>">
        </div>

        <div class="mb-3">
            <label>Phone</label>

            <input type="text"
                   name="phone"
                   class="form-control"
                   value="<?= $row['phone'] ?>">
        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

</body>
</html>

<?php

if(isset($_POST['name'])) {

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    mysqli_query(
        $conn,
        "UPDATE users SET
        name='$name',
        email='$email',
        phone='$phone'
        WHERE id='$id'"
    );

    header("Location:index.php");
}

?>