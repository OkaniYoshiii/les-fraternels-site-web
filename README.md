# Site internet "Les Fraternels"

"Les Fraternels" est un serveur de jeu pour le jeu vidéo "7 Days To Die". Dans le but d'augmenter la visibilité du serveur de pouvoir afficher de manière libres certaines informations de manière publique (règles, modifications réalisées sur le jeu, memebre du STAFF ...), un site internet a été réalisé.

## Stack technique 

Le projet est réalisé en : 

- HTML
- Sass (CSS)
- Typescript (Javascript)
- PHP

En supplément, l'Autoloader de Composer a été utlisé pour simplifier le code côté backend.

## Prérequis

Tout d'abord, assurez vous de disposer de Nodejs et Composer installé sur votre environement de travail.

Afin de vérifier ces prérequis, tapez les commandes suivantes dans un terminal :

```bash
npm -v
composer -v
```

Ceci devrait afficher les version respectives de Nodejs et Composer installées sur votre environement.

## Installation des dépendances

Afin de pouvoir installer les différentes dépendances, exécutez les commande suivantes dans le terminal, à la racine du projet :

- Sass et Typescript:

```bash
npm install
```
- Autoloader de Composer :
```bash
composer install
```

## Configuration du projet

Le projet nécessite une base de données SQL afin de pouvoir récupérer les différentes informations concernant les Mods du site.
La structure de cette base de données peut être trouvée dans le fichier `db_structure.sql`, présent à la racine du projet.

Une fois votre base de données structurée, créez un fichier `config.local.php` dans le dossier `config` en suivant l'exemple présenté dans `config.local.template.php`. 