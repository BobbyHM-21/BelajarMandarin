<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSK1 Quiz</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/hsk.css'); ?>">
    <script src="<?php echo base_url('assets/js/hsk.js'); ?>" defer></script>
</head>
<body>
    <div class="container">
        <h1>HSK1 Quiz</h1>
        <form action="<?php echo site_url('hsk1/submit'); ?>" method="post">
            <?php foreach ($questions as $question): ?>
                <div class="question">
                    <p><strong>Question:</strong></p>
                    <p><?php echo $question->chinese_character . ' (' . $question->pinyin . ')'; ?></p>
                    <label for="answer-<?php echo $question->id; ?>">Your Answer (in Indonesian or English):</label>
                    <input type="text" id="answer-<?php echo $question->id; ?>" name="answers[<?php echo $question->id; ?>]" required>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
