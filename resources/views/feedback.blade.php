<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Form</title>
</head>
<body>
    <h1>Feedback Form</h1>

    <form action="/feedback" method="POST">
        @csrf

        <label for="name">Your Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="message">Your Feedback:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Send Feedback</button>
    </form>
</body>
</html>