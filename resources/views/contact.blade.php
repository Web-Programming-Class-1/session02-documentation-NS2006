<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <form action="/submit-contact" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your name">
        <button type="submit">Send</button>
    </form>
    <br>
    <a href="/about">About Page</a>
</body>
</html>