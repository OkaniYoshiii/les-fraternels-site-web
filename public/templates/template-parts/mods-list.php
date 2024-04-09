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
                <p>Tags :
                    <span class="tags">
                        <?php foreach($mod->getTags() as $tag) echo $tag . ', '; ?>
                    </span></p>
                <p class="mod-desc"><?= $mod->getDescription() ;?></p>
            </div>
        </div>
    </div>
<?php } ?>