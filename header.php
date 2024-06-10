<?php $render_template = $args['render_template'] ?? true ?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open() ?>


    <?php if ($render_template) : ?>
    <cyn-header>
        <?php wp_nav_menu() ?>
    </cyn-header>
    <?php endif; ?>



    <!-- <div class="container mx-auto">
            <ul class="flex justify-around justify-items-center items-center">
                <li><img src="<?php echo get_template_directory_uri() . " /assets/img/logo.png" ?>" alt=""></li>
                <li>فروشگاه</li>
                <li>لباس نوزاد</li>
                <li>لباس دخترونه</li>
                <li>لباس پسرونه</li>
                <li>اکسسوری</li>
                <li> تخفیف دارها</li>
                <li>پیگیری سفارشات</li>
            </ul>
        </div> -->