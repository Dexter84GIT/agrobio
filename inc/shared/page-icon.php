<div class="icon">
    <?php if ($thisPageFrom['value'] === 'bees') : ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/catalog-page/icon_bee.svg" alt="<?php echo $thisPageFrom['value']; ?>">
    <?php elseif ($thisPageFrom['value'] === 'cattle') : ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/catalog-page/icon_cow.svg" alt="<?php echo $thisPageFrom['value']; ?>">
    <?php else : ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/catalog-page/icon_pets.svg" alt="<?php echo $thisPageFrom['value']; ?>">
    <?php endif; ?>
</div>