<?php
function getBeerImages(PDO $pdo)
{
    $sql = "SELECT * FROM Biere";
    $stmt = $pdo->query($sql);
    $beers = $stmt->fetchAll();
    return $beers;
}

function getBeerStock(PDO $pdo)
{
    $sql = "SELECT stock FROM Biere";
    $stmt = $pdo->query($sql);
    $beerStock = $stmt->fetchColumn();
    return $beerStock;
}
function getArticles(PDO $pdo, array $ids)
{
    if (empty($ids)) {
        // Si le tableau est vide, retourner un tableau vide
        return [];
    }

    // Créer des placeholders pour les IDs
    $placeholders = implode(',', array_fill(0, count($ids), '?'));

    // Préparer la requête SQL
    $sql = "SELECT * FROM biere WHERE id_biere IN ($placeholders)";
    $stmt = $pdo->prepare($sql);

    // Exécuter la requête avec les IDs
    $stmt->execute($ids);

    // Récupérer les résultats
    $beers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $beers;
}


function getBeerData(PDO $pdo, $id)
{
    $sql = "SELECT stock FROM Biere WHERE id_biere = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $beerStock = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $beerStock;
}

function getMembres(PDO $pdo)
{
    $sql = "SELECT * FROM membres";
    $stmt = $pdo->query($sql);
    $membres = $stmt->fetchAll();
    return $membres;
}

function updateCart($id)
{
    // Récupérer le panier à partir du cookie
    $panier = isset($_COOKIE["panier"]) ? json_decode($_COOKIE["panier"], true) : array();
    var_dump($panier);
    // Créer une copie du panier
    $panierCopy = $panier;

    // Vérifier et mettre à jour la quantité de l'article dans le panier
    if (isset($panier[$id])) {
        $panier[$id]++;
    } else {
        $panier[$id] = 1;
    }

    $panierCopy = $panier;

    setcookie('panier', json_encode($panierCopy));
}
function getPanierTotal($panier, $panierQuery)
{
    $total = 0;

    if (isset($panier)) {
        foreach ($panier as $id_biere => $quantite) {
            // Trouver la bière correspondante dans le tableau des bières
            foreach ($panierQuery as $biere) {
                if ($biere['id_biere'] == $id_biere) {
                    // Ajouter le prix total de cette bière (quantité * prix) au total général
                    $total += $quantite * $biere['prix'];
                    break;
                }
            }
        }
    }
    return $total;
}


function createMembre(PDO $pdo, $query)
{
    // Préparation de la requête SQL pour l'insertion d'un nouveau membre
    $sql = "INSERT INTO client (nom, prenom, DDN, adresseMail, numeroTelephone, adresse_de_facturation) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($query);

    $lastInsertedId = $pdo->lastInsertId();
    return $lastInsertedId;
}

function createAdressePostal(PDO $pdo, $query)
{
    // Préparation de la requête SQL pour l'insertion d'un nouveau membre
    $sql = "INSERT INTO adressepostale (ville, pays, codePostale, rue) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($query);

    $lastInsertedId = $pdo->lastInsertId();
    return $lastInsertedId;
}

function createCommande(PDO $pdo, $query)
{
    // Préparation de la requête SQL pour l'insertion d'un nouveau membre
    $sql = "INSERT INTO commande (montant, statut, id_payement, id_ap, id_client) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($query);

    $lastInsertedId = $pdo->lastInsertId();
    return $lastInsertedId;
}


function handleOrder(PDO $pdo)
{
    if (!$_POST['prenom'] || !$_POST['nom'] || !$_POST['date'] || !$_POST['email'] || !$_POST['rue'] || !$_POST['ville'] || !$_POST['codePostal'] || !$_POST['pays'] || !$_POST['numero'] || !$_POST['adresseFacturation']) {
        return header('Location: /commandes.php?msg=row');
    }

    $panier = isset($_COOKIE["panier"]) ? json_decode($_COOKIE["panier"], true) : [];

    if (!is_array($panier)) {
        return header('Location: /commandes.php?msg=empty');
    }

    $ids = array_keys($panier);
    $panierQuery = getArticles($pdo, $ids);

    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $date = htmlspecialchars($_POST['date']);
    $email = htmlspecialchars($_POST['email']);
    $rue = htmlspecialchars($_POST['rue']);
    $adresseFacturation = htmlspecialchars($_POST['adresseFacturation']);
    $ville = htmlspecialchars($_POST['ville']);
    $codePostal = htmlspecialchars($_POST['codePostal']);
    $pays = htmlspecialchars($_POST['pays']);
    $numero = htmlspecialchars($_POST['numero']);

    $statut = "En cours";
    $total = getPanierTotal($panier, $panierQuery);
    $random_32_digits = bin2hex(random_bytes(16));

    $membreID = createMembre($pdo, [$nom, $prenom, $date, $email, $numero, $adresseFacturation]);
    $adressePostalID = createAdressePostal($pdo, [$ville, $pays, $codePostal, $rue]);
    $commande = createCommande($pdo, [$total, $statut, $random_32_digits, $adressePostalID, $membreID]);

    return header('Location: /commandes.php?msg=success');
}