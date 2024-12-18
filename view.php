<?php
include 'data.php';

// Vérification si une requête POST est reçue
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

    if ($id > 0) {
        // Requête SQL pour récupérer l'article
        $sql = "SELECT * FROM articles WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $article = $stmt->fetch();
        
        // Vérification si l'article existe
        if (!$article) {
            echo "Article introuvable.";
            exit;
        }
    } else {
        echo "ID invalide.";
        exit;
    }
} else {
    echo "Aucune donnée reçue.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Voir l'article</title>
</head>
<body>
<div class="contenair">
    <div class="view-container">
        <div class="view-actions">
            <!-- Lien vers index.php avec une icône -->
            <a href="index.php" class="view-back-button">
                <i class="fas fa-home"></i> Accueil
            </a>
            
            <!-- Lien vers Read.php avec une icône -->
            <a href="Read.php" class="view-back-button">
                <i class="fas fa-list"></i> Liste
            </a>
        </div><br>
        <?php  echo "<p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>" ?>
        <h1 class="view-title"><?= htmlspecialchars($article['titre']) ?></h1>
        <p class="view-content"><?= nl2br(htmlspecialchars($article['contenu'])) ?></p>
        <div class="view-actions">
            <a href="Read.php" class="view-back-button">Retour à la liste</a>
        </div>
    </div>
</div>

</body>
</html>
