<?php defined('ABSPATH') || exit; ?>

<?php get_header() ?>
<style>
.banner_ctn {
    background-image: url("<?php echo get_template_directory_uri() . "/assets/img/banner.png" ?>");
    padding: 25px;
    background-repeat: no-repeat;
    width: 100vw;
    height: 80vh;
    background-position: center center;
}
</style>
<main class="main">
    <div class="banner_ctn">
        <cyn-button>
            click here
        </cyn-button>
    </div>
    <layout-container>
        <component-card data-title="<?php the_title() ?>" data-image=""
            data-image-alt="Mark Conroy's avatar from CodePen.io"
            data-description="We are reading a tutorial about how to create web components. More specifically, how to create nested web components."
            data-cta-href="https://blog.logrocket.com/" data-cta-text="Read more">
            <?= wp_get_attachment_image(get_post_thumbnail_id(), 'full'); ?>
        </component-card>

        <component-card data-title="<?php the_title() ?>" data-image=""
            data-image-alt="Mark Conroy's avatar from CodePen.io"
            data-description="We are reading a tutorial about how to create web components. More specifically, how to create nested web components."
            data-cta-href="https://blog.logrocket.com/" data-cta-text="Read more">

            <?= wp_get_attachment_image(get_post_thumbnail_id(), 'full'); ?>
        </component-card>

        <component-card data-title="<?php the_title() ?>" data-image=""
            data-image-alt="Mark Conroy's avatar from CodePen.io"
            data-description="We are reading a tutorial about how to create web components. More specifically, how to create nested web components."
            data-cta-href="https://blog.logrocket.com/" data-cta-text="Read more">
            <?= wp_get_attachment_image(get_post_thumbnail_id(), 'full'); ?>
        </component-card>
    </layout-container>



    <section>
        <?php the_content() ?>
    </section>
    </div>
</main>

<?php get_footer() ?>