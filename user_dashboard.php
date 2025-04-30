<!-- <!DOCTYPE html>
<html>
<head>
    <title>Dashboard User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 20px;
        }
        .logout-button {
            padding: 10px 20px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .logout-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Selamat Datang, <?= session()->get('username'); ?>!</h1>
        <p class="lead text-center">Ini adalah dashboard pelanggan untuk layanan grooming hewan peliharaan.</p>

        <div class="mt-4">
            <h4>Layanan yang tersedia:</h4>
            <ul>
                <li>Grooming Dasar</li>
                <li>Grooming Lengkap</li>
                <li>Perawatan Kuku</li>
                <li>Pembersihan Telinga</li>
            </ul>

            <p class="mt-4">Ingin melakukan booking? Silakan hubungi kami melalui kontak tersedia.</p>
        </div>

        <div class="logout-container">
            <a href="<?= base_url('/logout') ?>" class="logout-button">Logout</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="overlay-container">
            <h1 class="text-center">Selamat Datang, <?= session()->get('username'); ?>!</h1>
            <p class="lead text-center">Ini adalah dashboard pelanggan untuk layanan grooming hewan peliharaan.</p>

            <div class="card p-4 mt-4">
                <h4>Layanan yang tersedia:</h4>
                <ul>
                    <li>Grooming Dasar</li>
                    <li>Grooming Lengkap</li>
                    <li>Perawatan Kuku</li>
                    <li>Pembersihan Telinga</li>
                </ul>

                <p class="mt-4">Ingin melakukan booking? Silakan hubungi kami melalui kontak tersedia.</p>
            </div>

            <div class="logout-container">
                <a href="<?= base_url('/logout') ?>" class="logout-button">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
