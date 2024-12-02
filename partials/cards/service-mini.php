<?php
$postId = $args['post-id'] ?? get_the_ID();
$classImg = $args['class-img'] ?? "";
$classText = $args['class-text'] ?? "";

if ($postId === 0) {
    throw new ErrorException('post id is invalid', 0, E_WARNING);
}

$terms = get_the_terms($postId, 'service-cat');

?>
<div class="rounded-2xl overflow-hidden flex flex-col text-primary-20 p-2 bg-primary-100 isolate hover:rotate-2 transition-all duration-300 ">
    <a href=" <?php echo get_permalink($postId) ?>">
        <div class="flex gap-1 ">
            <div>
                <?php echo get_the_post_thumbnail($postId, 'full', ['class' => 'rounded-xl w-16 h-16 object-cover ' . $classImg]) ?>
            </div>

            <div class="text-body flex items-center justify-center text-primary-20 <?php echo $classText ?>">
                <?php echo get_the_title($postId) ?>
            </div>
        </div>
    </a>

</div>