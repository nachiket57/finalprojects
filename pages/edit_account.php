<?php include 'header.php'; ?>

<article>

<?php $array = get_object_vars($data) ?>

<?php $string='https://web.njit.edu/~nmd33/mvc/index.php?page=accounts&action=update' ?>




<form action=<?php echo $string ?> method="POST">



    <div class="container">
        <label><b>email</b></label>
        <input type="text" value="<?php echo $array['email']?>" name="email" >

        <br>

        <label><b>firstname</b></label>
        <input type="text" value="<?php echo $array['fname']?>" name="fname" >

        <br>

        <label><b>lastname</b></label>
        <input type="text" value="<?php echo $array['lname']?>" name="lname" >

        <br>

        <label><b>phone</b></label>
        <input type="text" value="<?php echo $array['phone'] ?>" name="phone" >

        <br>

        <label><b>birthday</b></label>
        <input type="text" value="<?php echo $array['birthday']?>" name="birthday" >

        <br>

        <label><b>gender</b></label>
        <input type="text" value="<?php echo $array['gender']?>" name="gender" >

        <br>

        <label><b>password</b></label>
        <input type="text" value="<?php echo $array['password'] ?>" name="password" >

        <button type="submit">Update</button>
    </div>



</form>


</article>


<?php include 'footer.php'; ?>