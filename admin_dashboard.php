<!-- <!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            background-image: url('https://example.com/path-to-your-pet-background.jpg'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            color: #333;
        }
        .card {
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background for readability */
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
        <h1 class="text-center">Selamat Datang, Admin!</h1>
        <p class="lead text-center">Ini adalah dashboard untuk mengelola layanan grooming hewan peliharaan.</p>

        <div class="card">
            <div class="card-body">
                <h4>Fitur Admin:</h4>
                <ul class="list-group">
                    <li class="list-group-item">Melihat dan mengatur jadwal grooming</li>
                    <li class="list-group-item">Menambahkan layanan baru</li>
                    <li class="list-group-item">Melihat daftar booking dari user</li>
                </ul>
            </div>
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
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="overlay-container">
            <h1 class="text-center">Selamat Datang, Admin!</h1>
            <p class="lead text-center">Ini adalah dashboard untuk mengelola layanan grooming hewan peliharaan.</p>

            <div class="card p-4 mt-4">
                <h4>Fitur Admin:</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Melihat dan mengatur jadwal grooming</li>
                    <li class="list-group-item">Menambahkan layanan baru</li>
                    <li class="list-group-item">Melihat daftar booking dari user</li>
                </ul>
            </div>

            <div class="logout-container">
                <a href="<?= base_url('/logout') ?>" class="logout-button">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
