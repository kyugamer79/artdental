<?php defined('ABSPATH') || exit;  ?>
<!-- Not found  -->

<?php get_header(); ?>
<div class="py-12 max-xl:hidden"></div>

<main class="container flex justify-center items-center flex-col">
    <!-- 404 image  -->
    <div>
        <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/404-image.png" ?>" alt="404-picture">
    </div>

    <div class="py-6"></div>

    <!-- Text and button  -->
    <div class="items-center justify-center">
        <!-- Text  -->
        <div class="text-body">
            <?php _e('متاسفانه صفحه ی مورد نظر یافت نشد', 'cyn-dm') ?>
        </div>

        <div class="py-2"></div>


        <!-- button  -->
        <div>
            <cyn-button type="primary" size="md" href="#" class="items-center justify-center">
                <?php _e('بازگشت به صفحه اصلی', 'cyn-dm') ?>
            </cyn-button>
        </div>
    </div>

</main>






<?php get_footer(); ?>