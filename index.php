
<?php

require ('./admin/lib/php/adm_list_include.php');
$cnx = Connexion::getInstance($dsn, $user, $pass);
session_start();
?>
<html>
    <head>
            <link rel="stylesheet" type="text/css" href="admin/lib/css/bootstrap-4.0.0/dist/css/bootstrap.css"/>
            <script src="admin/lib/js/jquery-3.2.1.js"></script>            
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <script src="admin/lib/css/bootstrap-4.0.0-beta-dist/js/bootstrap.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" ></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
            <script src="admin/lib/js/gt_functions.js"></script>
            <link rel="stylesheet" type="text/css" href="admin/lib/css/stylecss.css" />
            <meta charset="utf8"/>
            <title>Sport Heroes</title>

        </head>

        <body>
            <div class="container">

                <header > 
                    <h2 id="titre"> Sport Heroes </h2>              
                                              
                </header> 



                <div class="container2">
                    <nav>
                        <?php
                        if (file_exists('./lib/php/p_gt_menu.php')) {
                            include ('./lib/php/p_gt_menu.php');
                        }
                        ?>   

                    </nav>


                    <div class="col-sm-10">
                        <section id="main">
                            <?php
                            if (!isset($_SESSION['page'])) {
                                $_SESSION['page'] = "accueil";
                            }
                            if (isset($_GET['page'])) {
                                $_SESSION['page'] = $_GET['page'];
                            }
                            $path = './pages/' . $_SESSION['page'] . '.php';
                            if (file_exists($path)) {
                                include ($path);
                            } else {
                                ?>
                                <span class="lefcolumn">Contenu utile</span>
                                <meta http-refresh: Content="1;url=index.php?page=accueil"/>
                                <?php
                            }
                            ?>  
                        </section>
                    </div>



                    <footer class="footer">
                        <?php
                        if (file_exists('./lib/php/p_gt_footer.php')) {
                            include ('./lib/php/p_gt_footer.php');
                        }
                        ?>       
                    </footer>  

                </div>
            </div>
        </div>	
    </div>
</body>
</html>
