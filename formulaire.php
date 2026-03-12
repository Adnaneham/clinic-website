<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Nouveau Client - Hôpital</title>
    <style>
        /* Votre style CSS ici */
    </style>
</head>
<body>

    <?php
    // Traitement du formulaire si des données sont soumises//
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Connexion à la base de données (à adapter selon vos paramètres)
        $servername = "localhost";
        $username = "votre_nom_utilisateur";
        $password = "votre_mot_de_passe";
        $dbname = "votre_nom_de_base_de_donnees";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Récupérer les données du formulaire
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $date_naissance = $_POST['date_naissance'];
        $adresse = $_POST['adresse'];
        $telephone = $_POST['telephone'];

        // Préparer et exécuter la requête SQL pour insérer les données dans la table utilisateur//
        $sql = "INSERT INTO utilisateur (nom, prenom, sexe, date_naissance, adresse, telephone) VALUES ('$nom', '$prenom', '$sexe', '$date_naissance', '$adresse', '$telephone')";

        if ($conn->query($sql) === TRUE) {
            echo "Enregistrement réussi.";
        } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }

        // Fermer la connexion à la base de données
        $conn->close();
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Inscription Nouveau Client - Hôpital</h2>

        <!-- Vos champs de formulaire ici -->

        <button type="submit">S'inscrire</button>
    </form>

</body>
</html>
