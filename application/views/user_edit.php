<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Data User</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Form Edit Data User</h2>
        <form method="post" action="<?= base_url('user/update'); ?>">
            <input type="hidden" name="id" value="<?= $user->id; ?>">

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" value="<?= $user->nama; ?>" name="nama" required>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" value="<?= $user->username; ?>" name="username" required>
            </div>

            <div class="form-group">
    <label for="password">Password</label>
    <div style="position: relative;">
        <input type="password" id="password" name="password" value="<?= $user->password; ?>" required>
        <span onclick="togglePassword()" 
                    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);
                        cursor: pointer; font-size: 16px; color: #888;">👁</span>
            </div>
        </div>
            <input type="submit" name="ubah" value="Ubah Data">
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
