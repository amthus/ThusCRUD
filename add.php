<?php
include 'data.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];

    $sql = "INSERT INTO articles (titre, contenu) VALUES (:titre, :contenu)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['titre' => $titre, 'contenu' => $contenu]);

    header('Location: read.php');
    exit;
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="Style.css">
<div class="container">
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
    <?php  echo "<p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
" ?>
    <form method="POST" class="form-container">
        <div class="form-group">
            <label for="titre" class="form-label">Titre :</label>
            <input type="text" name="titre" id="titre" class="form-input" required>
        </div>
        
        <div class="form-group">
            <label for="contenu" class="form-label">Contenu :</label>
            <textarea name="contenu" id="contenu" class="form-textarea" required></textarea>
        </div>
        
        <div class="form-group">
            <button type="submit" class="form-button">Ajouter</button>
        </div>
    </form>
</div>

