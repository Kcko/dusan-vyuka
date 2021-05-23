<?php  
    include 'fragments/header.php'; 
?>

<div class="container">
    <div class="row">
        <div class="col-12">

            <h1>Test</h1>

            <?php
                $user = null;
                if (isset($_GET['user'])) {
                    $user = $_GET['user'];
                }
                if ($user == 'dusan') {
                    echo "ahoj sem dusan";
                }

                if ($user == 'roman') {
                    echo "ahoj sem roman";
                }
            ?>
        
        </div>
    </div>
</div>



<?php  
   include 'fragments/footer.php'; 
?>