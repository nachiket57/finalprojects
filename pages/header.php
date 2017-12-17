<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body{


            background-color: #a2d6d1;
        }

    </style>

</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="https://web.njit.edu/~nmd33/mvc/index.php?page=tasks&action=all">TODO APP</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?page=accounts&action=profile">Profile</a></li>
            <li><a href="index.php?page=tasks&action=create">Create Task</a></li>
            <li><a href="index.php?page=homepage&action=logout">Logout</a></li>

        </ul>
    </div>
</nav>

<div class="container"> 