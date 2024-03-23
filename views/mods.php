<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mods</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="images/logos/logo-fraternels-30x30.ico" />
    <link rel="stylesheet" href="css/default.css" media="screen">
    <link rel="stylesheet" href="css/mods.css" media="screen">
    <script src="js/default.js" defer></script>
</head>

<body data-javascript-enabled="false">
    
<?php include_once "components/header.php"; ?>
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

                    <?php include_once 'components/modsList.php'; ?>
                </div>
            </div>
        </section>
    </main>
    
<?php include_once "components/footer.php"; ?>
</body>

</html>