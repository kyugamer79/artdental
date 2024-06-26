<?php defined('ABSPATH') || exit; ?>

<!-- Archive Doctor Page -->
<?php get_header() ?>

<?php cyn_get_component('breadcrumb') ?>

<main class="container">

    <!-- Doctors Card -->
    <section>

        <!-- Title -->
        <div class="text-h1 max-lg:text-h4">
            <?php _e('متخصص های مجموعه', 'cyn-dm') ?>
        </div>

        <!-- Introduction -->
        <div>

            <!-- Name -->
            <div class="text-h5 font-medium">
                <?php echo the_title() ?>
            </div>

            <div class="text-body_s font-normal">
                <?php echo get_field('expert') ?>
            </div>
        </div>

        <!-- Image -->
        <div>

        </div>


    </section>

</main>



<?php get_footer() ?>