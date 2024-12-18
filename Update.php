<?php
include 'data.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];

    $sql = "UPDATE articles SET titre = :titre, contenu = :contenu WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['titre' => $titre, 'contenu' => $contenu, 'id' => $id]);

    header('Location: read.php');
    exit;
}

$sql = "SELECT * FROM articles WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$article = $stmt->fetch();
?>

<link rel="stylesheet" href="Style.css">
<div class="container">
<form method="POST" class="form-container">
    <div class="form-group">
        <label for="titre" class="form-label">Titre :</label>
        <input 
            type="text" 
            name="titre" 
            id="titre" 
            class="form-input" 
            value="<?= $article['titre'] ?>" 
            required
        >
    </div>
    
    <div class="form-group">
        <label for="contenu" class="form-label">Contenu :</label>
        <textarea 
            name="contenu" 
            id="contenu" 
            class="form-textarea" 
            required
        ><?= $article['contenu'] ?></textarea>
    </div>
    
    <div class="form-group">
        <button type="submit" class="form-button">Modifier</button>
    </div>
</form>

</div>
