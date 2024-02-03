<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SecureBank</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        footer {
            margin-top: 30px;
            color: #999;
        }

        #nextButton {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #nextButton:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Welcome to SecureBank!</h1>
    <p>We are pleased to have you with us for your banking needs. Your time is valuable, and we appreciate your decision to book a slot with us at SecureBank.</p>
    <p>Our dedicated staff is ready to assist you with any transactions or inquiries you may have. Please feel free to reach out if you need any help during your visit.</p>
    <p>Thank you for choosing SecureBank. We look forward to serving you!</p>
    <button id="nextButton" onclick="redirectToNextPage()">Next Page</button>
    <footer>&copy; <?php echo date("Y"); ?> SecureBank. All rights reserved.</footer>

    <script>
        function redirectToNextPage() {
            window.location.href = "next_page.php";
        }
    </script>
</body>
</html>