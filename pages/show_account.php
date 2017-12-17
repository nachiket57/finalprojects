<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<?php $array = get_object_vars($data); //print_r($array);
$string ='index.php?page=accounts&action=test&id='; $string .= $array['id']; ?>

<form action="<?php echo $string?>" method="POST" name="form">



    <div class="container">
        <label><b>email</b></label>
        <input type="text" value="<?php echo $array['email']?>" name="email" readonly>

        <br>

        <label><b>firstname</b></label>
        <input type="text" value="<?php echo $array['fname']?>" name="fname" readonly>

        <br>

        <label><b>lastname</b></label>
        <input type="text" value="<?php echo $array['lname']?>" name="lname" readonly>

        <br>

        <label><b>phone</b></label>
        <input type="text" value="<?php echo $array['phone'] ?>" name="phone" readonly>

        <br>

        <label><b>birthday</b></label>
        <input type="text" value="<?php echo $array['birthday']?>" name="birthday" readonly>

        <br>

        <label><b>gender</b></label>
        <input type="text" value="<?php echo $array['gender']?>" name="gender" readonly>

        <br>

        <label><b>password</b></label>
        <input type="text" value="<?php echo $array['password'] ?>" name="password" readonly>
        <br>
        <input type="submit" name="btSubmit" value="Edit">
        <input type="submit" name="btSubmit" value="Delete">
    </div>


</form>











<script src="js/scripts.js">

</script>
</body>
</html>