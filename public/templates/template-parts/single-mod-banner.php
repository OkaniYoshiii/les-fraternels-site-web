<section class="hero-banner text-centered" style="--mod-banner: url(<?= $mod->getThumbnail()->getSource() ?>);">
    <div class="hero-filter">
        <div class="medium hero-title">
            <h1><?= $mod->getName() ?></h1>
            <p class="mod-category">
                <?php require TEMPLATE_PARTS_DIR . '/tags-list.php'; ?>
            </p>
        </div>
        <div class="mod-infos">
            <div class="medium mod-infos-wrapper">
                <div class="mod-info">
                    <p>Auteur: <span><?= $mod->getAuthor(); ?></span></p>
                </div>
                <div class="mod-info">
                    <p>Date de publication: <span><time datetime="<?= $mod->getReleaseDate(); ?>"><?= date('d/m/Y', strtotime($mod->getReleaseDate())); ?></time></span></p>
                </div>
                <div class="mod-info">
                    <p>Version actuelle: <span>1.0.0</span></p>
                </div>
            </div>
        </div>
    </div>
</section>