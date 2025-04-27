<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: block;
            margin: 10px auto;
            font-size: 16px;
        }
        input[type="submit"] {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        .flash-message {
            margin-bottom: 15px;
            font-weight: bold;
        }
        .flash-success {
            color: green;
        }
        .flash-error {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Tambah User</h2>

    <!-- Flashdata message ditaruh di sini -->
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="flash-message flash-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')) : ?>
        <div class="flash-message flash-error">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('user/save'); ?>">
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="text" name="username" placeholder="Username" required>

        <div style="position: relative;">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <span onclick="togglePassword()" 
                  style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);
                         cursor: pointer; font-size: 18px; color: #888;">👁</span>
        </div>

        <input type="submit" name="kirim" value="Save">
    </form>
</div>

<script>
    function togglePassword() {
        const pwd = document.getElementById("password");
        pwd.type = pwd.type === "password" ? "text" : "password";
    }
</script>
</body>
</html>
