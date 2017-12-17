<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Simple Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="pages/assets/css/style.css">


</head>

<body>
<div class="container">
    <div class="header"><h1>Login</h1></div>

    <form class="login" action="index.php?page=accounts&action=login" method="post">
        <input type="email" placeholder="Username" name="email" />
        <input type="password" placeholder="Password" name="password"password" />
        <input type="submit" value="Login" />
    </form>

    <a href="index.php?page=accounts&action=register">Register</a>
</div>


</body>
</html>
