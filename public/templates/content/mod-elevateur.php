
<!DOCTYPE html>
<html lang="fr">
<head>
<?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - Elevateur quantique</title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Elevateur quantique, Elevateur, Ascenseur">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
</head>
<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2>Description</h2>
                <p>En fin de partie, il est possible que vous ayez construit une réelle villa dans laquelle se balader est un plaisir visuellement parlant mais cela peut parfois être aussi un déplaisir de devoir constamment osciller entre les différents étages pour aller chercher ce Fer que vous aviez oublié pour votre Forge ! Quand on a pas de tête, il vaut mieux avoir des jambes ! Et bien Kanaverum en a eu marre de se balader à pied, et a décidé de nous créer un Mod pour faciliter la navigation dans nos base en crééant un ascenseur, rien que ça !</p>
                <h3>Fonctionnalités :</h3>
                <p>Grâce à un bloc nommé "Elevateur Quantique", vous aurez la possibilité de vous téléporter d'un étage à un autre en un clin d'oeil.</p>
                <p> Pour cela, il vous faudra placer un Elevateur à un certain niveau puis un autre, sur le même plan horizontal mais sur un étage différent. Si les deux élévateurs sont bien sur le même plan horizontal, alors vous devriez pouvoir vous télporter vers l'élévateur du haut en sautant et vous téléporter vers l'élévateur du bas en vous accroupissant.</p>
                <p>Vous pourrez retrouver cee Mod sur le site 7 Days To Die Mods à l'adresse suivante : <a href="https://7daystodiemods.com/quantum-elevators/" target="_blank">https://7daystodiemods.com/quantum-elevators/</a></p>
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>
</body>
</html>