<?php
$answers = [
    'q1' => 'c',
    'q2' => 'b'
];

$score = 0;

foreach ($answers as $question => $answer) {
    if (isset($_POST[$question]) && $_POST[$question] == $answer) {
        $score++;
    }
}

$totalQuestions = count($answers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="result-container">
        <h1>Quiz Result</h1>
        <p>Your score is <?php echo $score; ?> out of <?php echo $totalQuestions; ?>.</p>
        <a href="index.html">Take the quiz again</a>
    </div>
</body>
</html>