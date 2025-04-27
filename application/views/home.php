<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Kopi Nusantara</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            line-height: 1.6;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #f39c12;
        }

        .hero {
            background: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #f39c12;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background-color: #e67e22;
        }

        @media (max-width: 768px) {
            .hero h2 {
                font-size: 32px;
            }

            .hero p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Nusantara</h1>
    <nav>
        <a href="#">Beranda</a>
        <a href="#">Tentang</a>
        <a href="#">Produk</a>
        <a href="#">Kontak</a>
    </nav>
</header>

<section class="hero">
    <div>
        <h2>Selamat Datang</h2>
        <p>Dari Sabang sampai Merauke, kami hadir untuk Anda.</p>
        <a href="http://localhost/latihansim/user/add">
        <button class="btn">Daftar</button>
        </a>
    </div>
</section>

</body>
</html>
