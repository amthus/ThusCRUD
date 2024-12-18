<!-- <?php
include 'data.php';

$sql = "SELECT * FROM articles";
$stmt = $pdo->query($sql);
$articles = $stmt->fetchAll();
?>

<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<a href="add.php">Ajouter un article</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($articles as $article): ?>
        <tr>
            <td><?= $article['id'] ?></td>
            <td><?= $article['titre'] ?></td>
            <td><?= $article['contenu'] ?></td>
            <td class="action-links">
                <a href="update.php?id=<?= $article['id'] ?>"><i class="fas fa-edit icon"></i>Modifier</a>
                <a href="delete.php?id=<?= $article['id'] ?>" onclick="return confirm('Êtes-vous sûr ?')">
                    <i class="fas fa-trash-alt icon"></i>Supprimer
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table> -->

<?php
include 'data.php';

$sql = "SELECT * FROM articles";
$stmt = $pdo->query($sql);
$articles = $stmt->fetchAll();
?>

<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="container">
    <div class="view-actions">
        <!-- Lien vers index.php avec une icône -->
        <a href="index.php" class="view-back-button">
            <i class="fas fa-home"></i> Accueil
        </a>
    </div>
    <h1>Gestion des Articles</h1>
    
    <!-- Lien pour ajouter un article -->
    <a href="add.php" class="add-button"><i class="fas fa-plus-circle"></i> Ajouter un article</a>
    
    <!-- Table des articles -->
    <table>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $article['id'] ?></td>
                <td><?= $article['titre'] ?></td>
                <td><?= $article['contenu'] ?></td>

                <td class="action-links">
                    <a href="update.php?id=<?= $article['id'] ?>" class="update">
                        <i class="fas fa-edit"></i> Modifier
                    </a>
                    <a href="delete.php?id=<?= $article['id'] ?>" class="delete" onclick="return confirm('Êtes-vous sûr ?')">
                        <i class="fas fa-trash-alt"></i>  Supprimer
                    </a>
                    <form action="view.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $article['id'] ?>">
                        <button type="submit" class="view">
                            <i class="fas fa-eye"></i> Voir
                        </button>
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
