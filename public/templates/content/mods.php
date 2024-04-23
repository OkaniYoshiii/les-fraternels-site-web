<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Nos Mods</title>
    <meta name="description" content="Vous pourrez retrouver tout nos Mods actuellement utilisés ou non sur le serveur. L'ensemble des Mods que nous mettons en place sur le server sont server-side, ce qui signifie qu'ils ne nécessitent aucun téléchargement.">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Server-side">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/mods.css" media="screen">
</head>

<body data-javascript-enabled="false">

<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <section>
            <h2 class="medium text-centered visually-hidden">Nos Mods</h2>
            <div class="mods-content wide">
                <div class="narrow content-sidebar">
                    <form action="/mods" method="get" autocomplete="off">
                        <div class="mods-filters">
                            <fieldset>
                                <legend class="mods-selection-title">Filtrer par utilisation</legend>
                                <div class="mods-selection">
                                    <div class="mods-radio-container">
                                        <input type="radio" name="activated-mods" id="all-mods" value="all"<?= ((!isset($_GET['activated-mods']) && $checkboxesDefaultValues['mods'] === 'all') || (isset($_GET['activated-mods']) && $_GET['activated-mods'] === 'all')) ? 'checked' : '' ?> >
                                        <label for="all-mods">Tous les mods</label>
                                    </div>
                                    <div class="mods-radio-container">
                                        <input type="radio" name="activated-mods" id="activated-mods" value="activated"<?= ((!isset($_GET['activated-mods']) && $checkboxesDefaultValues['mods'] === 'activated') || (isset($_GET['activated-mods']) && $_GET['activated-mods'] === 'activated')) ? 'checked' : '' ?>>
                                        <label for="activated-mods">Utilisés sur la partie en cours</label>
                                    </div>
                                    <div class="mods-radio-container">
                                        <input type="radio" name="activated-mods" id="deactived-mods" value="deactivated"<?= ((!isset($_GET['activated-mods']) && $checkboxesDefaultValues['mods'] === 'activated') || (isset($_GET['activated-mods']) && $_GET['activated-mods'] === 'deactivated')) ? 'checked' : '' ?>>
                                        <label for="deactived-mods">Désactivés</label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="tags-selection-title">Filtrer par tags</legend>
                                <div class="tags-selection">
                                    <div class="mods-radio-container">
                                        <input type="radio" name="tags" id="all-tags" value="all" <?= ((!isset($_GET['tags'])) || ($_GET['tags'] === 'all') || !in_array($_GET['tags'], $tags)) ? 'checked' : '' ?> >
                                        <label for="all-tags">Tous les tags</label>
                                    </div>
                                    <?php foreach($tags as $tag) { ?>
                                        <div class="mods-radio-container">
                                            <input type="radio" name="tags" id="tag-<?= $tag ?>" value="<?= $tag ?>" <?= (isset($_GET['tags']) && $_GET['tags'] === $tag) ? 'checked' : '' ?>>
                                            <label for="tag-<?= $tag ?>"><?= $tag ?></label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </fieldset>
                        </div>
                        <input type="submit" value="Filter">
                    </form>
                    <p class="output">Résultats : <span class="mod-count"><?= count($mods) ?></span></p>
                </div>
                <div class="mods">
                    <?php require_once TEMPLATE_PARTS_DIR . '/mods-list.php' ?>
                </div>
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>

</html>