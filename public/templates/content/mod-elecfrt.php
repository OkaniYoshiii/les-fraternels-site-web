<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, ElecFRT, Electricté, Générateurs">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
    <script src="<?= SITE_URL . JS_DIR ?>/js/default.js" defer></script>
</head>
<body class="no-js">  

<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2>Description</h2>
                < <p class="mod-description"><?= $mod->getDescription(); ?></p>
                <h3>Fonctionnalités :</h3>
                <p>Ce mod rajoute deux générateurs :</p>
                <p><b>Générateur de chantier :</b></p>
                <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-elecbdr-small-engine-1234x873.webp" width="1234" height="873" alt="Générateur de chantier du mod ElecFRT.">
                <blockquote>
                <p>Capacité du Réservoir : 1500
                Capacité énergétique maximale : 1500W</p>
                </blockquote>
                <p><b>Générateur industriel </b></p>
                <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-elecbdr-big-engine-1920x1080.webp" width="1920" height="1080" alt="Générateur industriel du mod ElecFRT.">
                <blockquote>
                <p>Capacité du Réservoir : 25000
                Capacité énergétique maximale : 7500W</p>
                </blockquote>
                <p>Et modifie aussi les statistiques des générateurs Vanilla :</p>
                <p><b>Groupe électrogène</b></p>
                <blockquote>
                <p>Capacité du Réservoir : 750
                Capacité énergétique maximale : 480W</p>
                </blockquote>
                <p><b>Groupe solaire</b></p>
                <blockquote>
                <p>Capacité énergétique maximale : 180W</p>
                </blockquote>
                <p>Les Groupes Solaires et les Panneaux Solaires sont fabricables dans l'Etabli grâce au Magazine &quot;L'électricité pour débutant&quot;.</p>
                <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-elecbdr-craft-530x345.webp" alt="">
                <p>Le Bloc de Verre pare-balles est nécessaire pour la construction des Panneaux Solaires. Ce dernier nécessitait un Creuset afin de pouvoir être construit ce qui n'est désormais plus le cas.</p>
                <div class="two-columns">
                    <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-elecbdr-craft-3-526x344.webp" width="526" height="644" alt="Recette de fabrication d'un panneau solaire du mod ElecFRT.">
                    <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-elecbdr-craft-4-527x348.webp" width="527" height="348" alt="Recette de fabrication d'un groupe solaire du mod ElecFRT.">
                </div>
                <p>Le mod modifie les valeurs de consommation électriques de certains pièges comme les Tourelles, les Pièges à Lames etc ... et rajoute aussi des Piquets Enflammés qui fonctionnent de la même manière que les Piquets Electriques mais qui ... enflamment quoi ^^</p>
                <p>Les objectifs principaux du Mod sont de corser un peu la difficulté des Lunes de Sang et d'éviter que certains ne s'appuient trop sur l'électricité et les pièges pour passer la horde mais aussi afin d'augmenter la sensation d'évolution de vos bases.</p>
                <p>⚠️ Il est recommandé de laisser 3 blocs libres entre deux piquets pour éviter toute forme de bugs</p>
                <img src="<?= SITE_URL . IMG_MODS_DIR ?>/mod-elecbdr-fence-1920x1080.webp" width="1920" height="1080" alt="Une barrière enflammée rajoutée par le mod ElecFRT.">
            </div>
        </section>
    </main>  
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>
</html>