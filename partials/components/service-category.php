<?php

$service_terms = get_terms([
    'taxonomy' => 'service-cat',
    'orderby' => 'name',
    'hide_empty' => 0,
]);

?>

<div class="bg-primary-100 p-5 rounded-3xl">

    <div class="text-h6 font-medium">
        <?php _e('دسته بندی ها خدمات', 'cyn-dm') ?>
    </div>

    <div class="py-2"></div>

    <div class="grid gap-4 divide-y-[1px] divide-primary-90">

        <?php foreach ($service_terms as $service_term) :

            $posts = get_posts([
                'post_type'  => 'service',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service-cat',
                        'field' => 'slug',
                        'terms' => $service_term->slug
                    )
                )
            ]); ?>

        <div class="term | grid gap-1 pt-3">
            <!-- Taxonomy Title -->
            <div class="term-title | flex justify-between items-center cursor-pointer">

                <span class="title">
                    <?php echo $service_term->name ?>
                </span>

                <span>
                    <svg class="icon size-4 transition-all duration-300">
                        <use href="#icon-chevron-down" />
                    </svg>
                </span>

            </div>

            <!-- Taxonomy Terms -->
            <div class="term-panel grid grid-rows-[0fr] transition-all duration-300 "
                id="terms-<?php echo $service_term->slug; ?>">

                <div class="overflow-hidden rounded-xl">

                    <?php foreach ($posts as $post) : ?>

                    <div class="term-child | bg-primary-80 p-2">
                        <a href="<?php echo get_permalink($post->ID) ?>">
                            <?php echo $post->post_title ?>
                        </a>
                    </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>

        <?php endforeach; ?>



    </div>
</div>


<?php
wp_reset_postdata();