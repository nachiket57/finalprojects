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

    <div class="header"><h1>Sign Up</h1></div>

    <form class="Sign Up" action="index.php?page=accounts&action=store" method="post">
        First name: <input type="text" name="fname">
        Last name: <input type="text" name="lname">
        Email: <input type="text" name="email">
        Phone: <input type="text" name="phone">
        Birthday: <input type="text" name="birthday">
        Gender: <input type="text" name="gender">
        Password: <input type="password" name="password">
        <input type="submit" value="Submit form">
        <a href="https://web.njit.edu/~nmd33/mvc/">Log In</a>

    </form>


</div>


</body>
</html>
