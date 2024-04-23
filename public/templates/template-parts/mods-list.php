<?php foreach($mods as $mod) { ?>
    <div class="medium mod">
        <h3 class="mod-title"><a href="<?= $mod->getUri(); ?>"><span class="mod-name"><?= $mod->getName(); ?></span> - <?= $mod->getAuthor(); ?></a></h3>
        <div class="mod-infos">
            <a class="mod-thumbnail" href="<?= $mod->getUri();?>">
                <img src="<?= SITE_URL . $mod->getThumbnail()->getSource() ?>" alt="Une miniature du mod <?= $mod->getName();?>" width="<?= $mod->getThumbnail()->getWidth() ?>" height="<?= $mod->getThumbnail()->getWidth() ?>">
            </a>
            <div>
                <p class="release-date">Mis en ligne le : <time datetime="<?= $mod->getReleaseDate(); ?>"><?= date('d/m/Y', strtotime($mod->getReleaseDate())); ?></time></p>
                <?php if($mod->getIsUsed() === 1) { ?>
                    <span class="is-used">Utilisé sur le serveur</span>
                <?php } else { ?>
                    <span class="is-not-used">Désactivé pour le moment</span>
                <?php } ?>
                <p>Tags :
                    <?php require TEMPLATE_PARTS_DIR . '/tags-list.php'; ?>
                </p>
                <p class="mod-desc"><?= $mod->getDescription() ;?></p>
            </div>
        </div>
    </div>
<?php } ?>