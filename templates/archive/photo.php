<?php defined('ABSPATH') || exit; ?>

<?php
$podcasts = get_field('podcasts') ?? [];

$podcasts = get_posts([
    'post_type' => 'podcast',
    'posts_per_page' => -1,
    'fields' => 'ids',
]);

?>

<!-- Archive Doctor Page -->
<?php get_header() ?>

<?php cyn_get_component('breadcrumb') ?>

<main class="container grid gap-[48px]">

    <!-- Title -->
    <div class="text-h1 max-lg:text-h4 pb-6">
        <?php _e('متخصص های مجموعه', 'cyn-dm') ?>
    </div>

    <?php foreach ($doctor_posts as $index => $doctor_post) : ?>

    <?php cyn_get_card('archive-doctor', ['index' => $index]) ?>

    <?php endforeach; ?>

</main>

<?php get_footer() ?>