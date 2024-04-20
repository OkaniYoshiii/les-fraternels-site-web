<span class="tags">
    <?php foreach($mod->getTags() as $key => $tag) { ?>
        <?php if($key !== array_key_last($mod->getTags())) $tag .= ', '; ?>
        <span class="tag"><?= $tag; ?></span>
    <?php } ?>
</span>