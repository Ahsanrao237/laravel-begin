<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>

    <form action="/loginreq" method="POST">
        @csrf
        <input type="text" name="email123" placeholder="Email" />
        <input type="text" name="password123" placeholder="Password" />

        <input type="submit" value="submit" />
    </form>
</body>
</html>