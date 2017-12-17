<?php include 'header.php' ?>


<article>


<form action="https://web.njit.edu/~nmd33/mvc/index.php?page=tasks&action=store" method="POST" name="form">
    
        <div class="form-group">

        <h1>Create Task</h1>

        <br>
            <div class="form-group">
        <label><b>createddate</b></label>
        <input type="text" value="" name="createddate" >
            </div>

            <div class="form-group">

        <label><b>duedate</b></label>
        <input type="text" value="" name="duedate" >
            </div>


            <div class="form-group">
        <label><b>message</b></label>

        <textarea name="message" cols="50" rows="5"> </textarea>
            </div>


            <div class="form-group">
        <label><b>isdone</b></label>
        <input type="text" value="" name="isdone" >
            </div>



        <input type="submit" name="btSubmit" value="Add Task">



</form>

    </article>


<?php include 'footer.php' ?>
