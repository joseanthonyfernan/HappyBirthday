<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step by Step Process</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .steps-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .step {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #fafafa;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .step:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .step h2 {
            color: #007BFF;
            margin-bottom: 10px;
        }

        .step img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .step p {
            color: #555;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .steps-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .steps-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Step Guide</h1>
    <div class="steps-container">
        <div class="step">
            <h2>Step 1</h2>
            <img src="img/step1.jpg" alt="Click the red sidebar button">
            <p>Click the "Red Sidebar" button.</p>
        </div>
        <div class="step">
            <h2>Step 2</h2>
            <img src="img/step2.jpg" alt="Click the Enroll Now button">
            <p>Click the "Enroll Now" button.</p>
        </div>
        <div class="step">
            <h2>Step 3</h2>
            <img src="img/step3.jpg" alt="Click the Pre-Enroll Now button">
            <p>Click the "Pre-Enroll Now" button.</p>
        </div>
        <div class="step">
            <h2>Step 4</h2>
            <img src="img/step4.jpg" alt="Click the Create an Account button">
            <p>Click the "Create an Account" button.</p>
        </div>
        <div class="step">
            <h2>Step 5</h2>
            <img src="img/step5.jpg" alt="Enter personal email and password">
            <p>Enter your personal email and a strong password.</p>
        </div>
        <div class="step">
            <h2>Step 6</h2>
            <img src="img/step6.jpg" alt="Check the Terms and Conditions">
            <p>Check the "Terms and Conditions" box.</p>
        </div>
        <div class="step">
            <h2>Step 7</h2>
            <img src="img/step7.jpg" alt="Step 7 process">
            <p>Verify your email by clicking the confirmation link sent to your inbox.</p>
        </div>
        <div class="step">
            <h2>Step 8</h2>
            <img src="img/step8.jpg" alt="Step 8 process">
            <p>Log in with your registered email and password.</p>
        </div>
        <div class="step">
            <h2>Step 9</h2>
            <img src="img/step9.jpg" alt="Step 9 process">
            <p>Complete your profile setup and start exploring.</p>
        </div>
    </div>
</div>
</body>
</html>
