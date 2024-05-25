<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once TEMPLATE_PARTS_DIR . '/metadata.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/default-scripts.php'; ?>
    <?php require_once TEMPLATE_PARTS_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Compagnon, Mod chien">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
</head>

<body data-javascript-enabled="false">
<?php require_once TEMPLATE_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section class="narrow">
            <h2 id="description">Description</h2>
            <p><?= $mod->getDescription() ?></p>
            <h3>Obtenir le précieux toutou :</h3>
            <p>Afin d'obtenir votre compagnon, vous devrez d'abord trouver un petit chiot caché dans les différentes <b>niches pour chien</b> présentes dans le monde. En fouillant ces dernières, vous aurez une chance de trouver :</p>
            <ul>
                <li>De la Viande crue (35% de chance)</li>
                <li>Des Os (50% de chance)</li>
                <li>Un Chiot (15% de chance)</li>
            </ul>
            <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-compagnon-doghouse-1920x1080.webp" width="1920" height="1080" alt="Un bloc Niche de chien dans le jeu 7 Days To Die.">
            <h3>Elevage :</h3>
            <p>Une fois recueilli, il vous faudra le nourrir. Pour cela, une recette de fabrication a été rajoutée permettant de transformer votre chiot en puissant allié pour vos combats.</p>
            <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-compagnon-recipe-880x344.webp" width="880" height="344" alt="La recette permettant de fabriquer le chien présent dans le mod.">
            <h3>Bonus attribués :</h3>
            <p>Les Bonus attribués par le Chien peuvent varier en fonction des différentes versions du Mod mais à l'heure actuelle, les bonus sont :</p>
            <ul>
                <li>+5 Armure</li>
                <li>+10% Vitesse de course</li>
                <li>+15% de Régénération d'Endurance lors de la course et de la nage</li>
            </ul>
            <p>A vos pâtées 🐶</p>
            <h3>Où retrouver ce Mod ?</h3>
            <p>Vous pourrez retrouver le Mod sur le Site "7 Days To Die Mods" à l'adresse suivante : <br><br><a href="https://7daystodiemods.com/blewbarry-pup/" target="_blank">https://7daystodiemods.com/blewbarry-pup/</a></p>
        </section>
    </main>
<?php require_once TEMPLATE_DIR . "/footer.php"; ?>
</body>

</html>