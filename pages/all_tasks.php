<?php include 'header.php'; ?>




        <article>
                <h2>Task Table</h2>
               
                <table class="table table-striped">
<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);

?>


</article>


<?php include 'footer.php'; ?>