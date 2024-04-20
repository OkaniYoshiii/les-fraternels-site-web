
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - Réduction Bruit Foreuse</title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Foreuse, Bruit, Son foreuse">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/mod-son-foreuse.css">
</head>
<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2>Description</h2>
                <p class="mod-description"><?= $mod->getDescription(); ?></p>
                <h3>Fonctionnalités :</h3>
                <p>Au vu des limitations techniques induites par le modding en server-side et suite à un <a href="https://discord.com/channels/653642303663243309/1121940937480863874/1154828788237078638" target="_blank">sondage</a> réalisé sur le Discord de la communauté, il a été decidé de réduire le son de la foreuse de la manière suivante :</p>
                <p>Le son des outils frappant sur une surface métallique <b>lorsque le personnage est accroupi</b> a été réduit</p>
                <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-thumbnail-auger-sound-min-1920x1080.webp" width="1920" height="1080" alt="Une foreuse du jeu 7 Days To Die.">
                <p>Le jeu Vanilla faisait déjà cela ce qui fait que la réduction passe de <b>70%</b> à <b>90%</b> en comparaison au son de base, lorsque le joueur est debout.</p>
                <!-- <div class="sounds">
                    <div class="text-centered">
                        <p>Ancien son de la foreuse :</p>
                        <audio controls src="/audio/7DTD-foreuse-pre-patch.mp3">Son de la foreuse avant la correction</audio>
                    </div>
                    <div class="text-centered">
                        <p>Nouveau son de la foreuse :</p>
                        <audio controls src="/audio/7DTD-foreuse-post-patch.mp3">Son de la foreuse après la correction</audio>
                    </div>
                </div> -->
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>
</html>