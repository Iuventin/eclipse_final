<div class="wrapper">
    <div class="cart">
        <?php if ($panierQuery): ?>
            <?php foreach ($panierQuery as $article): ?>
                <div class="cart-item" data-id="<?php echo $article['id_biere']; ?>"
                    data-price="<?php echo $article['prix']; ?>">
                    <img src="public/images/<?php echo $article['chemin_image']; ?>.webp"
                        alt="Produit <?php echo $article['id_biere']; ?>">
                    <div class="item-details">
                        <h2><?php echo htmlspecialchars($article['nom']); ?></h2>
                        <p>Prix: <?php echo htmlspecialchars($article['prix']); ?>€</p>
                        <input type="number" value="<?php echo htmlspecialchars($panier[$article['id_biere']]); ?>" min="1"
                            class="item-quantity">
                        <button class="remove-item">Supprimer</button>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Votre panier est vide.</p>
        <?php endif; ?>
    </div>
    <div class="cart-summary">
        <form class="formCommandes" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="wrapperCommandes">
                <input name="prenom" class="commandesInput" type="text" placeholder="Prénom" required>
                <input name="nom" class="commandesInput" type="text" placeholder="Nom">
                <input name="date" class="commandesInput" type="date" placeholder="Date de naissance" required>
                <input name="email" class="commandesInput" type="email" placeholder="Adresse email" required>
                <input name="adresseFacturation" class="commandesInput" type="text" placeholder="Adresse de facturation"
                    required>
                <input name="rue" class="commandesInput" type="text" placeholder="Rue" required>
                <input name="ville" class="commandesInput" type="text" placeholder="Ville" required>
                <input name="codePostal" class="commandesInput" type="number" max="5" placeholder="Code Postal"
                    required>
                <input name="pays" class="commandesInput" type="text" placeholder="Pays" required>
                <input name="numero" class="commandesInput" type="number" placeholder="Numero de téléphone" required>
            </div>
            <p>Total: <span id="cart-total"><?php echo $total; ?>€</span></p>
            <button type="submit" id="checkout">Payer</button>
        </form>
    </div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/public/js/panier.js"></script>