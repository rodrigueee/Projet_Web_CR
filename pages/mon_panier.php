<?php
if (isset($_SESSION['mon_client'])) {
    $commande = new CommandeDB($cnx);
    $commande_client = $commande->getCommandeClient($_SESSION['mon_client']);
}

if (isset($_GET['supprimer'])) {
    $commande = new CommandeDB($cnx);
    $commande->delCommande($_SESSION['mon_client']);
    var_dump($commande);
    ?>
    <meta http-equiv = "refresh": content = "2;url=index.php?page=mon_panier">
    <?php
}
?>

<?php
$cmp = 0;
$code = 0;
$str = 'EXAM';

for ($i = 0; $i < sizeof($commande_client); $i++) {
    ?>
    </br></br>
    <table class="table table-hover">
        <thead>
            <tr class="table-dark">
                <th scope="col">Référence du produit</th>
                <th scope="col">Votre numéro de client </th>
                <th scope="col">Prix</th>
                <th scope="col">Supprimer cet article</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-danger">
                <th scope="row"><?php print $commande_client[$i]['idproduit'] ?></th>
                <td> <?php
    print utf8_decode($commande_client[$i]['idclient']);
    ?></td>
                <td>  <?php
                    print utf8_decode($commande_client[$i]['prix']);
                    $cmp = $cmp + ($commande_client[$i]['prix']);
                    ?></td>
                <td>  
                    <input type="submit" button type="button" name="supprimer" id="supprimer" value="Supprimer du panier" class="btn btn-danger">&nbsp;  </td>
                </td>
            </tr>
        </tbody>

    </table>


    <?php
}
print '<center><b>Montant total du panier : ' . $cmp . ' €</b></center>';
?>






<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Valider mon panier
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mon panier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="py-5 text-center">

                        <div class="row">
                            <div class="col-md-4 order-md-2 mb-4">


                            </div>
                            <div class="col-md-8 order-md-1">
                                <h4 class="mb-3">Adresse de facturation</h4>
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">Prénom</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="firstname" value="" required>
                                            <div class="invalid-feedback">
                                                Le prénom doit être entré
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Nom</label>
                                            <input type="text" class="form-control" id="lastName" placeholder="name" value="" required>
                                            <div class="invalid-feedback">
                                                Le prénom doit être entré
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="you@example.com" value="" required>
                                            <div class="invalid-feedback">
                                                L'adresse email doit être entrée
                                            </div>

                                            <div class="col-md-20 mb-20">
                                                <label for="address">Adresse</label>
                                                <input type="text" class="form-control" id="address" placeholder="76 rue des...t" required>
                                                <div class="invalid-feedback">
                                                    L'adresse doit être entrée
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-20 mb-3">
                                                <label for="country">Pays</label>
                                                <select class="custom-select d-block w-100" id="country" required>
                                                    <option value="">Votre pays</option>
                                                    <option>France</option>
                                                    <option>Belgique</option>
                                                    <option>Pays-bas</option>
                                                    <option>Suisse</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Sélectionnez un pays parmi la liste
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <hr class="mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="save-info">
                                        <label class="custom-control-label" for="save-info">Garder les informations pour les prochaines commandes</label>
                                    </div>
                                    <hr class="mb-4">

                                    <h4 class="mb-3">Paiement</h4>

                                    <div class="d-block my-3">
                                        <div class="custom-control custom-radio">
                                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                            <label class="custom-control-label" for="credit">Credit card</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                            <label class="custom-control-label" for="debit">Debit card</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                            <label class="custom-control-label" for="paypal">PayPal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-name">Nom du propriétaire de la carte</label>
                                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                            <small class="text-muted">Full name as displayed on card</small>
                                            <div class="invalid-feedback">
                                                Le nom est requis
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-number">Numéro de carte de crédit</br></label>
                                            <input type="text" class="form-control" id="cc-number" placeholder="--- --- ----" required>
                                            <div class="invalid-feedback">
                                                Le numéro de carte de crédit est requis
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-expiration">Date d'expiration</label>
                                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                            <div class="invalid-feedback">
                                                La date d'expiration est requise
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-cvv">CVV</label>
                                            <input type="text" class="form-control" id="cc-cvv" placeholder="Code au dos de votre carte" required>
                                            <div class="invalid-feedback">
                                                Le code de sécurité est requis
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-muted">Paiement</span>
                                        <span class="badge badge-secondary badge-pill">3</span>
                                    </h4>
                                    <ul class="list-group mb-3">


                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                            <div>
                                                <h6 class="my-0">Montant du panier</h6>
                                                <small class="text-muted"></small>
                                            </div>
                                            <span class="text-muted"><?php print $cmp . '€' ?></span>
                                        </li>

                                    </ul>
                                    <hr class="mb-4">
                                    <button class="btn btn-secondary" type="submit">Valider</button>
                                    <button type="close" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

</div>