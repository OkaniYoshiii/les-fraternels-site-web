<span class="tags">
    <?php 
        foreach($mod->getTags() as $key => $tag) { 
            echo $tag;
            if($key !== array_key_last($mod->getTags())) {
                echo ', ';
            }
        }
    ?>
</span>