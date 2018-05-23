<?php
if (isset($_GET['id'])) {
    $_SESSION['idproduit'] = $_GET['id'];
}
if (isset($_SESSION['idproduit'])) {
    $produits = new ProduitsDB($cnx);
    $monproduit = $produits->getProduits($_SESSION['idproduit']);
}

if (isset($_GET['acheter'])) {
    $commande = new CommandeDB($cnx);
    $commande->addCommande(array("idclient" => $_SESSION['mon_client'], "idproduit" => $_SESSION['idproduit'], "prix" => $monproduit[0]['prix']));
    
    
    ?>
    <meta http-equiv = "refresh": content = "2;url=index.php?page=produits">
    <?php
   
}
?>

</br></br>
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="formulaire_commande">
    <table class="able table-bordered table-dark">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sport</th>
                <th scope="col">Marque </th>
                <th scope="col">Description</th>
                <th scope="col">Prix</th>
                <th scope="col">Panier</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><img src="./admin/images/<?php print $monproduit[0]['photo'] ?>" alt="produits"/></th>
                <td> <?php
                    print utf8_decode($monproduit[0]['nomproduit']);
                    ?></td>
                <td>  <?php
                    print utf8_decode($monproduit[0]['marque']);
                    ?></td>
                <td> <?php
                    print utf8_decode($monproduit[0]['description']);
                    ?></td>
                <td> <?php
                    print utf8_decode($monproduit[0]['prix']);
                    ?>€</td>
                <td>  
                    <input type="submit" button type="button" name="acheter" id="acheter" value="Ajouter au panier" class="btn btn-secondary">&nbsp;  

                    <button type="button" value="Annuler" class="btn btn-secondary" onClick="javascript:document.location.href = 'index.php?page=produits'" /> Retour  </button>

                </td>

            </tr>




        </tbody>
    </table>


    <?php
    ?>

</div> 