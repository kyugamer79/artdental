<?php
$post_id = $args['post-id'] ?? get_the_ID();

?>

<!-- Single Blog Recommended Posts Card -->

<div class="grid grid-cols-3 gap-2 pt-2 items-center ">

    <!-- Image -->
    <div class="col-span-1">
        <a href="<?php echo get_permalink($post_id) ?>">
            <?php echo get_the_post_thumbnail($post_id, 'full', ['class' => 'rounded-xl aspect-square object-cover']) ?>
        </a>
    </div>

    <!-- Content -->
    <div class="col-span-2 text-primary-50">
        <a href="<?php echo get_permalink($post_id) ?>">
            <?php echo get_the_title($post_id) ?>
        </a>
    </div>

</div>