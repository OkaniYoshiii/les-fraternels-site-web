<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Nos Mods</title>
    <link rel="stylesheet" href="<?= CSS_DIR ?>/mods.css" media="screen">
</head>

<body data-javascript-enabled="false">

<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <section>
            <h2 class="medium text-centered visually-hidden">Nos Mods</h2>
            <div class="mods-content ultrawide">
                <div class="content-sidebar">
                    <fieldset class="medium">
                        <legend class="mods-selection-title">Filtrer par utilisation</legend>
                        <div class="mods-selection">
                            <div class="mods-radio-container">
                                <input type="radio" name="actived-mods" id="all-mods" checked>
                                <label for="all-mods">Tous les mods</label>
                            </div>
                            <div class="mods-radio-container">
                                <input type="radio" name="actived-mods" id="actived-mods">
                                <label for="active-mods">Utilisés sur la partie en cours</label>
                            </div>
                            <div class="mods-radio-container">
                                <input type="radio" name="actived-mods" id="disactived-mods">
                                <label for="disactived-mods">Désactivés</label>
                            </div>
                        </div>
                    </fieldset>
                    <hr>
                    <fieldset class="medium">
                        <legend class="tags-selection-title">Filtrer par tags</legend>
                        <div class="tags-selection">
                            <div class="mods-radio-container">
                                <input type="radio" name="all-tags" id="all-tags" checked>
                                <label for="all-mods">Tous les tags</label>
                                <?php foreach($tags as $tag) { ?>
                                    <input type="radio" name="tag-<?= $tag ?>" id="tag-<?= $tag ?>">
                                    <label for="all-mods"><?= $tag ?></label>
                                <?php } ?>
                            </div>
                        </div>
                    </fieldset>
                    <p class="output">Résultats : <span class="mod-count"></span></p>
                </div>
                <div class="mods">
                    <?php foreach($mods as $mod) { ?>
                        <div class="medium">
                            <h3 class="mod-title"><a href="<?= $mod->getUri(); ?>"><span class="mod-name"><?= $mod->getName(); ?></span> - <?= $mod->getAuthor(); ?></a></h3>
                            <div class="mod-infos">
                                <div class="mod-thumbnail">
                                    <a href="<?= $mod->getUri();?>">
                                        <img src="<?= $mod->getThumbnail()->getSource() ?>" alt="Une miniature du mod <?= $mod->getName();?>" width="<?= $mod->getThumbnail()->getWidth() ?>" height="<?= $mod->getThumbnail()->getWidth() ?>">
                                    </a>
                                </div>
                                <div>
                                    <p class="release-date">Mis en ligne le : <time datetime="<?= $mod->getReleaseDate(); ?>"><?= date('d/m/Y', strtotime($mod->getReleaseDate())); ?></time></p>
                                    <p>Tags : <span class="tags"><?php foreach($mod->getTags() as $tag) echo $tag . ', '; ?></span></p>
                                    <p class="mod-desc"><?= $mod->getDescription() ;?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>

</html>