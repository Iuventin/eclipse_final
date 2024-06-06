<?php


// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["quantite"]) || empty($_POST["nom"])) {
        $nomErr = "Le nom est requis"; //adapter en fonction de la siutuation
    }

    $quantite = htmlspecialchars($_POST["quantite"]);
    $idProduit = htmlspecialchars($_POST["idProduit"]);

    $panier = $_SESSION['panier'];

    if ($panier[$idProduit]) {
        $panier[$idProduit] = $panier[$idProduit]++;
    } else {
        $panier[$idProduit] = 1;
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Quantité: <input type="text" name="quantite" value="<?php echo $quantite; ?>"> // la quantite
    Email: <input hidden type="text" name="idProduit" value="<?php echo $email; ?>"> // l'id du produit depuis la bdd mais en hidden
    <input type="submit" name="submit" value="Ajouter au panier">
</form>

<?php
// Afficher les données soumises
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nomErr) && empty($emailErr)) {
    echo "<h2>Vos données soumises :</h2>";
    echo "Nom: " . $nom;
    echo "<br>";
    echo "Email: " . $email;
}
?>