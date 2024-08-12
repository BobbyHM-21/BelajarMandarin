<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit HSK1 Data</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/hsk.css'); ?>">
    <script src="<?php echo base_url('assets/js/hsk.js'); ?>" defer></script>
</head>
<body>
    <div class="container">
        <h1>Edit HSK1 Data</h1>
        <form action="<?php echo site_url('hsk1/edit/'.$hsk1_data['id']); ?>" method="post">
            <label for="chinese_character">Chinese Character:</label>
            <input type="text" name="chinese_character" value="<?php echo $hsk1_data['chinese_character']; ?>" required>
            <br>
            <label for="pinyin">Pinyin:</label>
            <input type="text" name="pinyin" value="<?php echo $hsk1_data['pinyin']; ?>" required>
            <br>
            <label for="english">English:</label>
            <input type="text" name="english" value="<?php echo $hsk1_data['english']; ?>" required>
            <br>
            <label for="indonesian">Indonesian:</label>
            <input type="text" name="indonesian" value="<?php echo $hsk1_data['indonesian']; ?>" required>
            <br>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
