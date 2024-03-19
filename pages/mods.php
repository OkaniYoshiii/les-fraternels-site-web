<?php
    require_once '../data/mods-json.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mods</title>
    <script>document.documentElement.classList.remove('no-js');</script>
    <link rel="icon" type="image/vnd.microsoft.icon" href="../images/logos/logo-fraternels-30x30.ico" />
    <link rel="stylesheet" href="../css/default.css" media="screen">
    <link rel="stylesheet" href="../css/mods.css" media="screen">
    <script src="../js/default.js" defer></script>
    <script src="../js/mods.js" defer></script>
</head>

<body data-javascript-enabled="false">
    
<?php include_once "../components/header.php"; ?>
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
                            </div>
                        </div>
                    </fieldset>
                    <p class="output">Résultats : <span class="mod-count"></span></p>
                </div>
                <div class="mods">
                    <?php foreach($mods as $mod) { ?>
                        <?php 
                            if (empty($mod['thumbnail'])) {
                                $mod['thumbnail'] = 'mod-thumbnail-default-533x300.webp';
                            }

                            $thumbnailPath = '../images/mods/' . $mod['thumbnail']; 
                            $thumbnailWidth = getimagesize($thumbnailPath)[0];
                            $thumbnailHeight = getimagesize($thumbnailPath)[1];
                        ?>

                        <div class="medium">
                            <h3 class="mod-title"><a href="<?= $mod['link']; ?>"><span class="mod-name"><?= $mod['name']; ?></span> - <?= $mod['author']; ?></a></h3>
                            <div class="mod-infos">
                                <div class="mod-thumbnail">
                                    <a href="<?= $mod['link'];?>">
                                        <img src="<?= $thumbnailPath ?>" alt="Une miniature du mod <?= $mod['name'];?>" width="<?= $thumbnailWidth ?>" height="<?= $thumbnailHeight ?>">
                                    </a>
                                </div>
                                <div>
                                    <p class="release-date">Mis en ligne le : <time datetime="<?= $mod['releaseDate']; ?>"><?= date('d/m/Y', strtotime($mod['releaseDate'])); ?></time></p>
                                    <p>Tags : <span class="tags"><?php foreach($mod['tags'] as $tag) echo $tag . ', '; ?></span></p>
                                    <p class="mod-desc"><?= $mod['description'] ;?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
    
<?php include_once "../components/footer.php"; ?>
</body>

</html>