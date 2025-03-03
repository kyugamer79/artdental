<?php

$specialPosts = get_posts([
    'post_type' => 'service',
    'posts_per_page' => 3,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'fields' => 'ids'
]);

?>
<div class="bg-primary-100 p-5 rounded-3xl max-md:w-full">
    <div class="text-h6 font-medium">
        <?php _e('خدمات ویژه', 'cyn-dm') ?>
    </div>
    <div class="py-2"></div>
    <div class="flex flex-col gap-3 divide-y-[1px] divide-primary-90">
        <?php foreach ($specialPosts as $specialPost) : ?>


            <?php cyn_get_card('service-mini', ['post-id' => $specialPost, 'class-img' => 'w-15 h-14', 'class-text' => 'text-primary-50 text-body-s']) ?>
            <!-- text-body-s باید باشه برای تست گذاشتم h1  -->


        <?php endforeach ?>
        <?php wp_reset_postdata() ?>

    </div>
</div>