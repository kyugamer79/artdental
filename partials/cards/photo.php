<?php
$postId = $args['post-id'] ?? get_the_ID();

if ($postId === 0) {
    throw new ErrorException('post id is invalid', 0, E_WARNING);
}
?>

<div
    class="relative overflow-hidden rounded-3xl h-full hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 after:content-[''] after:inset-0 after:absolute after:bg-gradient-to-t after:from-primary-0/30 after:to-primary-0/10 -z-10 isolate">
    <div class="h-full">
        <?php echo get_the_post_thumbnail($postId, 'medium', ['class' => 'w-full h-full object-cover']) ?>
    </div>
</div>