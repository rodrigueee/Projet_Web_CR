<?php
if (isset($_SESSION['mon_client'])) {
    $client = new ClientDB($cnx);
    $cli_co = $client->getClient($_SESSION['mon_client']);
}
?>


<div class="row"></br></br></br></div>
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Mon profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=mon_panier">Mon panier</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Bienvenue <?php print utf8_decode($cli_co[0]['prenom']); ?></h5>
        <p class="card-text"><div class="container">
            <div class="span3 well">
                <hr>
                <center>
                    
                    <p class="text-left">
                        <strong>Mon adresse :  </strong><?php print utf8_decode($cli_co[0]['adresse']); ?></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php print utf8_decode($cli_co[0]['codepostal']); ?>,<?php print utf8_decode($cli_co[0]['localite']); ?>
                        </br><strong> Mon Email : </strong><?php print utf8_decode($cli_co[0]['email']); ?>
                        </br><strong> Mon numéro de téléphone : </strong><?php print uft8_decode($cli_co[0]['gsm']); ?>
                        
                    </p>
                    <br>
                   

                </center>
            </div>

        </div>
    </div> 
</div>


