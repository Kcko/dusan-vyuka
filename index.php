<?php
// Vendor autoload
include 'vendor/autoload.php';

// Config
include 'app/config/config.php';

// Db connection
include 'app/config/database-connection.php';


// existuje parametr ?page=
if (isset($_GET['page']))
{
    $page = $_GET['page'];
    // pokud existuje soubor tak ho vlozime
    if (file_exists('views/' . $page . '.php')) {
        include 'views/' . $page . '.php';
    } else {
        include 'views/404.php';
    }
} // neexistuje tak vlozime uvodni stranku
else {
    include 'views/homepage.php';
}
