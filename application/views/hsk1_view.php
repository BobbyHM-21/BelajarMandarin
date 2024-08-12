<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSK1 Data</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/hsk.css'); ?>">
    <script src="<?php echo base_url('assets/js/hsk.js'); ?>" defer></script>
</head>
<body>
    <div class="container">
        <h1>HSK1 Data</h1>
        <!-- <a href="<?php echo site_url('hsk1/add'); ?>" class="btn btn-primary">Add New</a>
        <a href="<?php echo site_url('hsk1/import'); ?>" class="btn btn-primary">Import</a> -->
        <a href="<?php echo site_url('hsk1/quiz'); ?>" class="btn btn-primary">Start Quiz</a> <!-- Tombol untuk mengakses kuis -->
        <table class="table">
            <thead>
                <tr>
                    <th>Chinese Character</th>
                    <th>Pinyin</th>
                    <th>English</th>
                    <th>Indonesian</th>
                    <!-- <th>Actions</th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hsk1_data as $data): ?>
                    <tr>
                        <td><?php echo $data['chinese_character']; ?></td>
                        <td><?php echo $data['pinyin']; ?></td>
                        <td><?php echo $data['english']; ?></td>
                        <td><?php echo $data['indonesian']; ?></td>
                        <!-- <td>
                            <a href="<?php echo site_url('hsk1/edit/'.$data['id']); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('hsk1/delete/'.$data['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </td> -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
