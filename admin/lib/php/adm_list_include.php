<?php
//permet d'épurer l'index en réunissant tous les fichiers à inclure
if(file_exists('./lib/php/dbConnect.php')) {
    require ('./lib/php/dbConnect.php');
    require ('./lib/php/autoload.php');

}
else if(file_exists('./admin/lib/php/dbConnect.php')){

    require ('./admin/lib/php/dbConnect.php');
    require ('./admin/lib/php/autoload.php');
}

