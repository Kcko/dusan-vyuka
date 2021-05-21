<?php  
    include 'fragments/header.php'; 
?>

<div class="container">
    <div class="row">
        <div class="col-12">

            <h1>Homepage</h1>
            <?php
                $rows = dibi::fetchAll('SELECT * FROM project');
                echo '<pre>';
                print_R($rows);
                echo '</pre>';

                foreach ($rows as $row) {
                    echo $row->name . "<br />";
                }

            ?>

        </div>
    </div>
</div>



<?php  
   include 'fragments/footer.php'; 
?>