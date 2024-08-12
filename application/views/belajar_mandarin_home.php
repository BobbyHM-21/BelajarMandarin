<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Mandarin - Home</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Aplikasi Belajar Bahasa Mandarin</h1>
        <p>Pilih level HSK untuk memulai belajar:</p>
        <div class="card-container">
            <div class="card">
                <a href="<?php echo site_url('Hsk1'); ?>" class="card-content">
                    <h2>HSK 1</h2>
                    <p>Level dasar untuk pemula</p>
                </a>
            </div>
            <div class="card">
                <a href="<?php echo site_url('hsk2'); ?>" class="card-content">
                    <h2>HSK 2</h2>
                    <p>Level lanjutan untuk pemula</p>
                </a>
            </div>
            <div class="card coming-soon">
                <div class="card-content">
                    <h2>HSK 3</h2>
                    <p>Coming Soon</p>
                </div>
            </div>
            <div class="card coming-soon">
                <div class="card-content">
                    <h2>HSK 4</h2>
                    <p>Coming Soon</p>
                </div>
            </div>
            <div class="card coming-soon">
                <div class="card-content">
                    <h2>HSK 5</h2>
                    <p>Coming Soon</p>
                </div>
            </div>
            <div class="card coming-soon">
                <div class="card-content">
                    <h2>HSK 6</h2>
                    <p>Coming Soon</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
