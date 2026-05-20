<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Tambah User</h2>

    <form action="simpan.php" method="POST">

        <div class="mb-3">
            <label>Nama</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password"
                   name="password"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text"
                   name="phone"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Role</label>

            <select name="role"
                    class="form-control">

                <option value="admin">Admin</option>
                <option value="warga">Warga</option>
                <option value="pengelola">Pengelola</option>
                <option value="pengepul">Pengepul</option>

            </select>
        </div>

        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

</body>
</html>