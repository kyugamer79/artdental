<?php $postId = $args['post-id'] ?? get_the_ID(); ?>

<?php $history_img = get_field("history_img"); ?>


<div class="container">

    <!-- Title -->
    <div class="text-h2">
        <?php echo get_field('history_title') ?>
    </div>

    <!-- history Image -->
    <div class="">
        <?php echo wp_get_attachment_image($history_img, "full", false, ["class" => "rounded-3xl w-full"]) ?>
    </div>

    <!-- Txt -->
    <div class="text-body_s leading-8">
        <?php echo get_field('history_txt') ?>
    </div>

</div>