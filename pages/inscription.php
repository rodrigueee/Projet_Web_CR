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

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px">
    <div class="logo">Inscription</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_inscription">
            <form id="register-form" class="text-left">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">

                        <div class="form-group">
                            <label for="nom" class="sr-only">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" size="30" placeholder="Nom">
                        </div>

                        <div class="form-group">
                            <label for="prenom" class="sr-only">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
                        </div>

                        <div class="form-group">
                            <label for="reg_username" class="sr-only">Login</label>
                            <input type="text" class="form-control" id="login" name="login" placeholder="Login">
                        </div>

                        <div class="form-group">
                            <label for="motdepasse" class="sr-only">Mot de passe</label>
                            <input type="password" id="motdepasse" class="form-control" name="motdepasse" placeholder="Mot de passe">
                        </div>
                        <div class="form-group">
                            <label for="motdepasse2" class="sr-only">Confirmez le mot de passe</label>
                            <input type="password" id="motdepasse2" class="form-control" name="motdepasse2" placeholder="Confirmez le mot de passe">
                        </div>

                        <div class="form-group">
                            <label for="adresse" class="sr-only">Adresse</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                        </div>
                        <div class="form-group">
                            <label for="codepostal" class="sr-only">Code Postal</label>
                            <input type="text" class="form-control" id="codepostal" name="codepostal" placeholder="Code Postal">
                        </div>
                        <div class="form-group">
                            <label for="localite" class="sr-only">Localité</label>
                            <input type="text" class="form-control" id="localite" name="localite" placeholder="Localité">
                        </div>

                        <div class="form-group">
                            <label for="gsm" class="sr-only">GSM</label>
                            <input type="text" class="form-control" id="gsm" name="gsm" placeholder="GSM">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Adresse e-mail</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Adresse email">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Confirmez l'email</label>
                            <input type="email" id="email2" class="form-control" name="email2" placeholder="Confirmez l'email">
                        </div>


                        <div class="form-group login-group-checkbox">
                            <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                            <label for="reg_agree">J'accepte les <a href="#">termes</a></label>
                        </div>
                    </div>

                    <button type="submit" class="login-button" name="envoyer" id="envoyer" value="Envoyer"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="etc-login-form">
                    <p>Déjà un compte ?<a href="./index.php?page=connexion">Se connecter</a></p>
                </div>
            </form>
    </div>
    <!-- end:Main Form -->
</div>