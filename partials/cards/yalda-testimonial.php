<?php
$postId = $args['post-id'] ?? get_the_ID();

if ($postId === 0) {
    throw new ErrorException('post id is invalid', 0, E_WARNING);
}

?>


<div class="space-y-2 hover:rotate-2 transition-all duration-300">
    <div class="relative">
        <div>
            <?php echo get_the_post_thumbnail($postId, 'large', ['class' => 'rounded-2xl aspect-video object-cover h-[280px] max-lg:h-[200px] object-top']) ?>
        </div>

    </div>

    <div class="space-y-2">
        <div class="text-h5 text-primary-40">
            <?php echo get_the_title($postId) ?>
        </div>

        <div class="text-body text-primary-60">
            <?php echo get_the_excerpt($postId) ?>
        </div>
    </div>
</div>