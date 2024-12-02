<?php
$postId = $args['post-id'] ?? get_the_ID();

if ($postId === 0) {
    throw new ErrorException('post id is invalid', 0, E_WARNING);
}

$terms = get_the_terms($postId, 'service-cat');

?>

<div class="rounded-2xl overflow-hidden flex flex-col justify-between text-primary-100 min-h-[360px] bg-cover p-5 after:content-[''] after:inset-0 after:absolute relative after:bg-accent-0/35 after:-z-[1] isolate hover:rotate-2 transition-all duration-300 "
    style="background-image: url('<?php echo get_the_post_thumbnail_url($postId) ?>');">
    <div class="">
        <div class="text-caption">
            <?php if (!empty($terms)) : ?>
            <?php foreach ($terms as $index => $term) : ?>
            <?php
                    echo $term->name;
                    echo $index === array_key_last($terms) ? '' : ' • ';
                    ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>

        
        
        <div class="text-h6">
            <?php echo get_the_title($postId) ?>
        </div>
    </div>

    <div class="flex justify-end">
        <cyn-button type="secondary" size="md" href="<?php echo get_permalink($postId) ?>">
            <?php _e('مشاهده جزئیات', 'cyn-dm') ?>
        </cyn-button>
    </div>
</div>