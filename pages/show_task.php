<?php include 'header.php'; ?>

<article>


<?php  $array = get_object_vars($data);
$string ='index.php?page=tasks&action=test&id='; $string .= $array['id']; ?>

<form action="<?php echo $string?>" method="POST" name="form">



    <div class="container">
        <h1>Show Task</h1>

        <label><b>createddate</b></label>
        <input type="text" value="<?php echo $array['createddate']?>" name="createddate" readonly>

        <br>

        <label><b>duedate</b></label>
        <input type="text" value="<?php echo $array['duedate'] ?>" name="duedate" readonly>

        <br>

        <label><b>message</b></label>
        <textarea name="message" cols="50" rows="5" readonly><?php echo $array['message']?> </textarea>

        <br>

        <label><b>isdone</b></label>
        <input type="text" value="<?php echo $array['isdone']?>" name="isdone" readonly>

        <br>

        <input type="submit" name="btSubmit" value="Edit">
        <input type="submit" name="btSubmit" value="Delete">

</article>


        <?php include 'footer.php'; ?>

