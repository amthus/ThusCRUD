
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - ThusCrud</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <h2>ThusCrud</h2>
        </div>
        <ul class="nav-links">
            <li><a href="Read.php">Essayer</a></li>
        </ul>
    </nav>

    <!-- Contenu Principal -->
    <div class="main-content">
        <h1>Bienvenue sur ThusCrud</h1>
        <p>Gérez facilement vos articles avec les fonctionnalités suivantes :</p>

        <!-- Blocs de fonctionnalités -->
        <div class="feature-container">
            <div class="feature">
                <i class="fas fa-plus-circle feature-icon"></i>
                <h3>Ajouter un article</h3>
                <p>Ajoutez de nouveaux articles à votre base de données.</p>
            </div>
            <div class="feature">
                <i class="fas fa-eye feature-icon"></i>
                <h3>Voir les articles</h3>
                <p>Consultez les articles existants dans la base de données.</p>
            </div>
            <div class="feature">
                <i class="fas fa-edit feature-icon"></i>
                <h3>Modifier un article</h3>
                <p>Modifiez les articles déjà enregistrés.</p>
            </div>
            <div class="feature">
                <i class="fas fa-trash-alt feature-icon"></i>
                <h3>Supprimer un article</h3>
                <p>Supprimez les articles de votre base de données.</p>
            </div>
        </div>
    </div>

    <style>
        /* Global */
body {
    font-family: Arial, sans-serif;

    background-color: #f5f5f5;
}

h1 {
    color: #4F1787; /* Couleur principale */
}

h2 {
    color:rgb(247, 246, 248); /* Couleur principale */
    margin-right: 25px;
}

a {
    text-decoration: none;
    color: #4F1787;
}

/* Navbar */
.navbar {
    background-color: #180161; /* Fond de la navbar */
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content:space-evenly;
    align-items: center;
    margin: 0;
    
}

.navbar .logo h2 {
    margin: 0;
    font-size: 24px;
}

.navbar .nav-links {
    list-style: none;
    display: flex;
}

.navbar .nav-links li {
    margin-left: 20px;
}

.navbar .nav-links a {
    color: white;
    font-size: 18px;
}

/* Contenu principal */
.main-content {
    padding: 20px;
    text-align: center;
    
    
}

.main-content h1 {
    font-size: 36px;
    margin-bottom: 10px;
    margin-top: 150px;

}

.main-content p {
    font-size: 18px;
    margin-bottom: 30px;

}

/* Container des blocs de fonctionnalité */
.feature-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    padding: 0 50px;
    margin-top: 120px;
}

/* Style des blocs de fonctionnalité */
.feature {
    background-color: #FFFFFF;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease;
}

.feature:hover {
    transform: scale(1.05);
}

.feature-icon {
    font-size: 50px;
    color: #FB773C; /* Couleur des icônes */
}

.feature h3 {
    font-size: 22px;
    margin: 10px 0;
    color: #4F1787;
}

.feature p {
    font-size: 16px;
    color: #666666;
}
@keyframes blink {
    0% {
        background-color: red;
    }
    50% {
        background-color: transparent;
    }
    100% {
        background-color: red;
    }
}

/* Style de la navbar et des liens */
.nav-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: blink 1s infinite; /* Applique l'animation de clignotement */
}

.nav-links li {
    margin: 0 10px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 10px 15px;
    display: block;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

/* Optionnel : changement de couleur au survol */
.nav-links a:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

    </style>
</body>
</html>

