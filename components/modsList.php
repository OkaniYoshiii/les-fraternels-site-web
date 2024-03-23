<div class="mods">
    <?php foreach($mods as $mod) { ?>
        <div class="medium">
            <h3 class="mod-title"><a href="<?= $mod->link ?>"><span class="mod-name"><?= $mod->name ?></span> - <?= $mod->author ?></a></h3>
            <div class="mod-infos">
                <div class="mod-thumbnail">
                    <a href="<?= $mod->link;?>">
                        <img src="<?= $mod->thumbnail->path ?>" alt="Une miniature du mod <?= $mod->name ?>" width="<?= $mod->thumbnail->width ?>" height="<?= $mod->thumbnail->height ?>">
                    </a>
                </div>
                <div>
                    <p class="release-date">Mis en ligne le : <time datetime="<?= $mod->releaseDate; ?>"><?= date('d/m/Y', strtotime($mod->releaseDate)); ?></time></p>
                    <p>Tags :
                        <span class="tags">
                            <?php foreach($mod->tags as $index => $tag) { ?>
                                <?php if(array_key_last($mod->tags) !== $index) { ?>
                                    <span><?= $tag . ', ' ?></span>
                                <?php } else { ?>
                                    <span><?= $tag ?></span>
                                <?php } ?>
                            <?php } ?>
                        </span>
                    </p>
                    <p class="mod-desc"><?= $mod->description ;?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>