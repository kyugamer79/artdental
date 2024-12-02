<?php $postId = $args['post-id'] ?? get_the_ID(); ?>

<?php if (!empty(get_field('faq-group', $postId))) : ?>


    <div class="container">
        <div class="text-h2">
            <?php _e('سوالات متداول ', 'cyn-dm') ?>
        </div>
        <div class="my-4">
            <?php cyn_get_component('faq-group', ['type' => 'acf', 'acf_field' => 'faq-group', 'post-id' => $postId]) ?>
        </div>
    </div>
<?php endif; ?>