
<?php/*
$info = new ProduitsDB($cnx);
$liste_produits = $info->getListeProduitscycli();
$nbrProduits = count($liste_Produits);*/
?>


<?php
for ($i = 0; $i < $nbrProduits; $i++) {
    ?>

    </br></br>
    <table class="table table-hover table-dark">
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
                <th scope="row"><img src="./admin/images/<?php print $liste_produits[$i]['image'] ?>" alt="Produits"/></th>
                <td> <?php
                    print utf8_decode($liste_produits[$i]['sport']);
                    ?></td>
                <td>  <?php
                    print utf8_decode($liste_produits[$i]['marque']);
                    ?></td>
                <td> <?php
                    print utf8_decode($liste_produits[$i]['description']);
                    ?></td>
                <td> <?php
                    print utf8_decode($liste_produits[$i]['prix']);
                    ?>€</td>
                <td>  <?php
                    if (isset($_SESSION['client'])) {
                        ?>
                        <a href="index.php?page=commande&id=<?php print $liste_produits[$i]['Idproduits']; ?>">
                            Ajouter au panier 
                        </a>
                    <?php
                    } else {
                        print " Vous devez être connecté pour commander";
                    }
                    ?></td>
            </tr>
        </tbody>
    </table>


    <?php
}
?>

</div>  