<?php
include 'config/database.php';

$data = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Users</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Data Users</h2>

    <a href="tambah.php" class="btn btn-primary mb-3">
        Tambah User
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;

        while($row = mysqli_fetch_assoc($data)) :
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['role'] ?></td>
            <td><?= $row['status'] ?></td>

            <td>
                <a href="edit.php?id=<?= $row['id'] ?>"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <a href="hapus.php?id=<?= $row['id'] ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin hapus?')">
                   Hapus
                </a>
            </td>
        </tr>

        <?php endwhile; ?>

    </table>

</div>

</body>
</html>