<?php
if (isset($_GET['envoyer'])) {
    extract($_GET, EXTR_OVERWRITE);

    $client = new ClientDB($cnx);

    $client->addClient($_GET);
    ?>
    <meta http-equiv = "refresh": content = "1;url=index.php?page=accueil">
    <?php
}
?>
    <div>
<div class="text-center formt">
  
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
        <div class="taille">Inscription</div>   
            <div class="form-group row">
                <label for="nom" class="col-sm-2 col-form-label txtGras">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                </div>
            </div>
            <div class="form-group row">
                <label for="prenom" class="col-sm-2 col-form-label txtGras">Prénom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label txtGras">Login</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="login" name="login" placeholder="Login">
                </div>
            </div>
            <div class="form-group row">
                <label for="motdepasse" class="col-sm-2 col-form-label txtGras">Mot de passe</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="motdepasse" name="motdepasse" placeholder="Mot de passe">
                </div>
            </div>
            <div class="form-group row">
                <label for="motdepasse2" class="col-sm-2 col-form-label txtGras">Confirmez le mot de passe</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="motdepasse2" name="motdepasse2" placeholder="Confirmez le mot de passe">
                </div>
            </div>
            <div class="form-group row">
                <label for="adresse" class="col-sm-2 col-form-label txtGras">Adresse</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                </div>
            </div> 
            <div class="form-group row">
                <label for="codepostal" class="col-sm-2 col-form-label txtGras">Code postal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="codepostal" name="codepostal" placeholder="Code Postal">
                </div>
            </div>    
            <div class="form-group row">
                <label for="localite" class="col-sm-2 col-form-label txtGras">Localité</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="localite" name="localite" placeholder="Localité">
                </div>
            </div>
            <div class="form-group row">
                <label for="gsm" class="col-sm-2 col-form-label txtGras">GSM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="gsm" name="gsm" placeholder="GSM">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label txtGras">Adresse e-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Adresse email">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label txtGras">Confirmez l'email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email2" name="email2" placeholder="Confirmez l'email">
                </div>
            </div>

            <center>
                <div class="txtGras">
                    J'accepte les termes   &nbsp;&nbsp;      
                    <input class="checkbox" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">

                    </label>

                </div>
            </center>
            <div>
                </br>
            </div>
            <center>
                <div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="envoyer" id="envoyer" value="Envoyer">Sign in</button>
                    </div>
                </div>
            </center>
        </form>
</div>
    </div>
<!-- end:Main Form -->