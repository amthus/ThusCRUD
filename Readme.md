### `README.md`

```markdown
# Projet ThusCrud

Ainsi, ce projet est un système de gestion d'articles avec des fonctionnalités de CRUD (Créer, Lire, Mettre à jour, Supprimer). Il permet aux utilisateurs d'ajouter, afficher, modifier et supprimer des articles dans une base de données.

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les outils suivants sur votre machine :

- **PHP** (version 7.4 ou supérieure)
- **MySQL** ou une autre base de données relationnelle compatible
- **Un serveur local** comme XAMPP ou MAMP pour faire tourner le serveur PHP et MySQL

## Installation

1. Clonez le projet sur votre machine :

   ```bash
   git clone https://github.com/votre-utilisateur/thuscrud.git
   ```

2. Accédez au dossier du projet :

   ```bash
   cd thuscrud
   ```

3. Créez une base de données dans MySQL pour le projet.

   Exemple :

   ```sql
   CREATE DATABASE thuscrud;
   ```

4. Importez le schéma de la base de données via un fichier SQL (si disponible).

   Exemple de schéma de base de données (articles) :

   ```sql
   CREATE TABLE articles (
       id INT AUTO_INCREMENT PRIMARY KEY,
       titre VARCHAR(255) NOT NULL,
       contenu TEXT NOT NULL
   );
   ```

5. Assurez-vous que le fichier de connexion à la base de données (`data.php`) est correctement configuré avec vos identifiants MySQL :

   ```php
   <?php
   $host = 'localhost';
   $dbname = 'thuscrud';
   $username = 'root';
   $password = '';

   try {
       $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       echo "Erreur de connexion : " . $e->getMessage();
   }
   ?>
   ```

6. Ouvrez votre serveur local (XAMPP ou MAMP) et accédez à l'URL du projet dans votre navigateur.

   Exemple : `http://localhost/thuscrud/`

## Fonctionnalités

- **Afficher tous les articles** : Une page pour lister tous les articles enregistrés dans la base de données avec leurs titres et contenus.
- **Ajouter un article** : Un formulaire pour permettre à un utilisateur d'ajouter un article à la base de données.
- **Modifier un article** : Un formulaire pour modifier les informations d'un article existant.
- **Supprimer un article** : Un lien permettant de supprimer un article spécifique de la base de données.
- **Visualiser un article** : Un lien pour afficher un article en détail avec son contenu complet.

## Structure du projet

Voici la structure principale de fichiers du projet :

```
thuscrud/
│
├── data.php             # Fichier de connexion à la base de données
├── index.php            # Page principale avec la liste des articles
├── add.php              # Page pour ajouter un nouvel article
├── update.php           # Page pour modifier un article existant
├── delete.php           # Script pour supprimer un article
├── view.php             # Page pour afficher les détails d'un article
├── style.css            # Fichier CSS pour le style du projet
└── README.md            # Ce fichier README
```

## Utilisation

### Ajouter un article

1. Allez sur la page `add.php`.
2. Remplissez le formulaire avec le titre et le contenu de l'article.
3. Cliquez sur "Ajouter" pour enregistrer l'article dans la base de données.

### Modifier un article

1. Cliquez sur le lien "Modifier" à côté de l'article que vous souhaitez modifier.
2. Mettez à jour le titre ou le contenu de l'article.
3. Cliquez sur "Modifier" pour enregistrer les changements.

### Supprimer un article

1. Cliquez sur le lien "Supprimer" à côté de l'article que vous souhaitez supprimer.
2. Confirmez la suppression de l'article.

### Voir un article

1. Cliquez sur le lien "Voir" à côté de l'article pour afficher ses détails.

## Licence

Ce projet est sous licence MIT. Vous êtes libre de l'utiliser et de le modifier à votre guise.

## Contact

Si vous avez des questions, vous pouvez contacter le développeur principal :

- Email : [ametepemalthus16@gmail.com](ametepemalthus16@gmail.com)

```

