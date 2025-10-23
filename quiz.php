<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz System</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.quiz-container, .result-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h1 {
    margin-bottom: 20px;
}

.question {
    margin-bottom: 20px;
}

.submit-button {
    margin-top: 20px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

a {
    color: #4CAF50;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <div class="quiz-container">
        <h1>Quiz</h1>
        <form action="result.php" method="post">
            <div class="question">
                <h3>1. What is the capital of France?</h3>
                <input type="radio" id="q1a" name="q1" value="a">
                <label for="q1a">a) Berlin</label><br>
                <input type="radio" id="q1b" name="q1" value="b">
                <label for="q1b">b) Madrid</label><br>
                <input type="radio" id="q1c" name="q1" value="c">
                <label for="q1c">c) Paris</label><br>
                <input type="radio" id="q1d" name="q1" value="d">
                <label for="q1d">d) Rome</label>
            </div>
            <div class="question">
                <h3>2. What is 2 + 2?</h3>
                <input type="radio" id="q2a" name="q2" value="a">
                <label for="q2a">a) 3</label><br>
                <input type="radio" id="q2b" name="q2" value="b">
                <label for="q2b">b) 4</label><br>
                <input type="radio" id="q2c" name="q2" value="c">
                <label for="q2c">c) 5</label><br>
                <input type="radio" id="q2d" name="q2" value="d">
                <label for="q2d">d) 6</label>
            </div>
            <div class="submit-button">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>