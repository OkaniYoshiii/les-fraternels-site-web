<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName(); ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Oeufs, Nids, Loot">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
</head>

<body class="no-js">
    <?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section class="narrow">
            <h2 id="description">Description</h2>
            <p><?= $mod->getDescription() ?></p>
        </section>
    </main>
    <?php require_once HTML_DIR . "/footer.php"; ?>
</body>
</html>