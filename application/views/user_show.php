<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        a {
            text-decoration: none;
            background: #007bff;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 15px;
        }
        a:hover {
            background: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background: #007bff;
            color: white;
        }
        .btn {
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            border: none;
            cursor: pointer;
            display: inline-block;
        }
        .btn-edit {
            background: #ffc107;
        }
        .btn-edit:hover {
            background: #e0a800;
        }
        .btn-delete {
            background: #dc3545;
        }
        .btn-delete:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data User</h2>
        <a href="<?= base_url('user/add'); ?>">Tambah User</a>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th colspan="2">Opsi</th>
            </tr>
            <?php foreach ($users->result() as $i => $user) { ?>
            <tr>
                <td><?= ++$i; ?></td>
                <td><?= $user->nama; ?></td>
                <td><?= $user->username; ?></td>
                <td><a href="<?= base_url('user/edit/'.$user->id); ?>" class="btn btn-edit">Ubah</a></td>
                <td><a href="<?= base_url('user/delete/'.$user->id); ?>" class="btn btn-delete">Hapus</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
