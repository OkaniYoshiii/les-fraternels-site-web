
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php include_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - Single Seed</title>
    <link rel="stylesheet" href="<?= CSS_DIR ?>/default-mod.css">
</head>
<body class="no-js">
    
<?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2>Description</h2>
                <p>Sur les serveurs multijoueurs de 7 Days To Die, les arbres peuvent être une vraie plaie à gérer. Ils peuvent causer des lags sur certaines configurations et peuvent impacter les performances du serveur entier. C'est pour cela que vous retrouverez souvent des règles du style "Pas plus de X arbres dans un rayon de Y blocs" sur certains serveurs, dont le notre. Afin de vous empêcher de violer cette règle, nous avons alors décider de tout simplement réduire la quantité de graines founies par chaque arbre une fois abattu.</p>
                <h3>Fonctionnalités :</h3>
                <p>En vanilla, un arbre abbatu par n'importe quel arme ou outil <b>fournit 2 graines</b> au joueur. <br><br>Avec ce Mod, vous n'obtiendrez qu'<b>une seule graine</b> ce qui fait que le nombre d'arbres présent sur le serveur sera toujours constant empêchant ainsi que le serveur devienne innondé d'arbres et que les performances de ce dernier n'en prennent un coup.</p>
                <img src="/images/mods/mod-thumbnail-single-tree-min-1920x1080.webp" width="1920" hieght="1080" alt="Quelques arbres dans une forêt enneigée.">
            </div>
        </section>
    </main>
<?php require_once HTML_DIR . "/footer.php"; ?>

</body>
</html>