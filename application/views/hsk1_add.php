<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add HSK1 Data</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/hsk.css'); ?>">
    <script src="<?php echo base_url('assets/js/hsk.js'); ?>" defer></script>
</head>
<body>
    <div class="container">
        <h1>Add HSK1 Data</h1>
        <form action="<?php echo site_url('hsk1/add'); ?>" method="post">
            <label for="chinese_character">Chinese Character:</label>
            <input type="text" name="chinese_character" required>
            <br>
            <label for="pinyin">Pinyin:</label>
            <input type="text" name="pinyin" required>
            <br>
            <label for="english">English:</label>
            <input type="text" name="english" required>
            <br>
            <label for="indonesian">Indonesian:</label>
            <input type="text" name="indonesian" required>
            <br>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
