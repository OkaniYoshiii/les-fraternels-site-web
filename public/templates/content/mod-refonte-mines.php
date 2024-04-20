<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Mines terrestres, Mines collantes">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
</head>

<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2>Description</h2>
                <p class="mod-description"><?= $mod->getDescription(); ?></p>
                <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-landmines-1920x1080.webp" width="1920" height="1080" alt="Un abri en béton avec des mines terrestres placées sur le plafond et sur les murs.">
                <h3>Fonctionnalités :</h3>
                <p>Les modification apportées aux mines terrestres sont les suivantes :</p>
                <ul>
                    <li>Le coût des mines aux Marchands passe de <strong>291 Dukes</strong> à <strong>135 Dukes</strong></li>
                    <li>Les mines sont maintenant <strong>collantes</strong>, c'est à dire qu'elles peuvent être placées à l'envers en utilisant la &quot;rotation avancée&quot;</li>
                    <li>Les mines se craftent uniquement par pack de 3 et leur recette à été modifiée. Il faut 3 fois plus de ressources pour les faire comparé à en Vanilla SAUF pour le ruban ! <strong>Un seul ruban est désormais nécessaire pour faire 3 mines !</strong></li>
                </ul>
                <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-landmines-craft-532x347.webp" width="532" height="347" alt="La recette de fabrication des packs de mines ajoutés par le mod.">
                <p>Je rappelle que les mines peuvent désormais <strong>démembrer</strong> et leur chances de démembrement ont l'air assez haute d'après mes tests.</p>
                <p>Excellent pour couper les jambes de nos amis les Ferals ! 🧟</p>
            </div>
        </section>
    </main>
    
    <?php require_once HTML_DIR . "/footer.php"; ?>
</body>

</html>