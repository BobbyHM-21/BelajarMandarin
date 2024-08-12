<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSK1 Quiz Result</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/hsk.css'); ?>">
    <script src="<?php echo base_url('assets/js/hsk.js'); ?>" defer></script>
</head>
<body>
    <div class="container">
        <h1>Quiz Result</h1>
        <?php
        $total_questions = $this->M_hsk1->get_total_questions(); // Dapatkan jumlah total soal
        $score = $this->M_hsk1->get_score(); // Dapatkan skor dari sesi atau data lainnya
        ?>
        <p>Your Score: <?php echo $score; ?> / <?php echo $total_questions; ?></p>
        <table class="table">
            <thead>
                <tr>
                    <th>Chinese Character</th>
                    <th>Pinyin</th>
                    <th>Your Answer</th>
                    <th>Correct Answers</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $results = $this->M_hsk1->get_quiz_results(); 
                if (!empty($results)): 
                    foreach ($results as $result): ?>
                        <tr class="<?php echo $result['is_correct'] ? 'correct' : 'incorrect'; ?>">
                            <td><?php echo $result['chinese_character']; ?></td>
                            <td><?php echo $result['pinyin']; ?></td>
                            <td><?php echo $result['user_answer']; ?></td>
                            <td><?php echo $result['correct_answers']; ?></td>
                            <td><?php echo $result['is_correct'] ? 'Correct' : 'Incorrect'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No results to display</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <a href="<?php echo site_url('hsk1/quiz'); ?>" class="btn btn-primary">Try Again</a>
    </div>
</body>
</html>
