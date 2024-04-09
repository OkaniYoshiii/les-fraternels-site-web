
<!DOCTYPE html>
<html lang="fr">
<head>
<?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - Nos chers bannis</title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Nos chers bannis, Bannis, Ban, Exclusion">
    <link rel="stylesheet" href="<?= CSS_DIR ?>/default-mod.css">
</head>
<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2>Description</h2>
                <p>En tant qu'administrateur ou modérateur d'un serveur, on peut se retrouver face à de nombreux "phénomènes" aux intentions souvent malicieuses voire toxiques. Traquer et expulser ces individus est un travail de tout les jours et peut parfois mener à des "mini-investigations" très demandeuses en temps et en énergie. Alors, pourquoi ne pas utiliser cela pour se moquer de ces personnes et décompresser ? Après tout, elles ont été intentionnellement mauvaises avec nous, donc est ce qu'il ne serait pas le temps de "se venger" de façon amusante ? Ils ont pourris notre serveur, alors pourquoi pas les "pourrir" nous aussi ?</p>
                <h3>Fonctionnalités :</h3>
                <p>Les zombies ont désormais un nom affiché lorsque vous les visez. Ces noms correspondent aux différentes personnes ayant tenté d'aller à l'encontre des règles du serveur. Plus la faute est grave, plus le zombie est dégueu, puant et immonde !</p>
                <img src="<?= IMG_MODS_DIR ?>/mod-thumbnail-banrewind-min-1920x1080.webp" width="1920" height="1080" alt="Un groupe de 3 zombies attaquant un joueur. Les zombies ont un nom de joueur ayant été banni affiché au dessus de leur tête.">
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>
</html>