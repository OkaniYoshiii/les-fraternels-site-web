<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Inventaire, Slots d'inventaire">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/mod-inventory.css">
</head>

<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
    <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2 id="description">Description</h2>
                <p class="mod-description"><?= $mod->getDescription(); ?></p>
                <p>ShoudenKalferas a compris cela et nous propose ici un Mod permettant de grandement augmenter la place présente dans notre inventaire.</p>
                <h3>Feature :</h3>
                <p>Les emplacements d'inventaire passent de <b>45 Slots</b> à <b>60 Slots</b></p>
                <p>Vous pourrez retrouver le lien vers le Mod en question sur le site "7 Days To Die Mods" à  l'adresse suivante : <br><a href="https://7daystodiemods.com/60-slot-backpack-with-30-reserve/" target="_blank">https://7daystodiemods.com/60-slot-backpack-with-30-reserve/</a></p>
                </ul>
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>

</html>