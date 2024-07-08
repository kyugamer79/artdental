<?php defined('ABSPATH') || exit; ?>

<?php
$doctor_posts = get_posts([
    'post_type'     => 'doctor',
    "post_per_page" => -1,
    'order'         => 'DESC',

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

    <?php cyn_get_card('archive-doctor', [
            'index' => $index, 'post-id' => $doctor_post->ID
        ]) ?>

    <?php endforeach; ?>

</main>



<?php get_footer() ?>