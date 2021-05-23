<?php  
    include 'fragments/header.php'; 
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="projects">Projekty</h1>



            <?php
                $page = $_GET['page'];

                // 
                $id = null;
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                
                // detail projektu 
                if ($id) {
                    $oneBuilding =  dibi::fetch('SELECT * FROM building WHERE id = ?', $id);
                    
                    ?>
                        <h3>Jméno a výška <?= $oneBuilding['name'] ?> (<?= $oneBuilding['height'] ?>)</h3>
                        <?= $oneBuilding['description'] ?>
                        <br />
                        <a href="?page=<?= $page ?>">Zpět na všechny projekty</a>
                    <?php

                }
                // vypis projektů
                else {

                    $buildings = dibi::fetchAll('SELECT * FROM building ORDER BY height ASC');

                    $count = count($buildings);
                    if ($count == 0) {
                        echo 'Zadne budovy :)';
                    } else {
                        foreach ($buildings as $item) {
                            //echo $item['name'] . "<br />";
                            // echo $item->name . "<br />";
                            // echo $item->height . "<br />";
                            // echo "<hr />";

                            ?>

                            <?php 
                            $dangerText = '';
                            if ($item['id'] == 2) {
                                $dangerText = 'text-danger';
                            }
                            ?>

                            <h3 class="<?= $dangerText ?>">Jméno a výška <?= $item['name'] ?> (<?= $item['height'] ?>)</h3>
                            <a href="?page=<?= $page ?>&id=<?= $item['id'] ?>">více o budově</a>

                            <?php
                        }

                    }

                }

            ?>
        </div>
    </div>
</div>



<?php
   include 'fragments/footer.php'; 
?>