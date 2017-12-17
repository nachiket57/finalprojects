<?php include 'header.php'; ?>

<article>

<?php $array = get_object_vars($data); ?>

<?php $string='https://web.njit.edu/~nmd33/mvc/index.php?page=tasks&action=update&id=';$string.=$_REQUEST['id']; ?>




<form action="<?php echo $string?>" method="POST" name="form">



    <div class="container">
        <h1>Update Task</h1>

        <br>

        <label><b>createddate</b></label>
        <input type="text" value="<?php echo $array['createddate']?>" name="createddate" >

        <br>

        <label><b>duedate</b></label>
        <input type="text" value="<?php echo $array['duedate'] ?>" name="duedate" >


        <br>
        <label><b>message</b></label>

        <textarea name="message" cols="50" rows="5"><?php echo $array['message']?> </textarea>


        <br>

        <label><b>isdone</b></label>
        <input type="text" value="<?php echo $array['isdone']?>" name="isdone" >

        <br>

        <input type="submit" name="btSubmit" value="Update">



</article>


<?php include 'footer.php'; ?>