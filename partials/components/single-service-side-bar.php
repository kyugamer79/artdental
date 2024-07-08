<!--Single Service SideBar -->

<?php
$cats = get_categories([
    'taxonomy' => 'product_cat',
    'orderby' => 'id',
    'hide_empty' => true,
]);
?>


<div class="h-full">

    <div class="grid sticky top-3">
        <!-- Search -->
        <?php cyn_get_component('service-side-bar-search') ?>

        <div class="py-3"></div>

        <!-- Table of Contents -->
        <div class="bg-primary-100 p-5 rounded-3xl">

            <!-- Title  -->
            <div class="text-h6 pb-4 font-medium">
                <?php _e('جدول محتوایی', 'cyn-dm') ?>
            </div>

            <div id="toc-container">

                <h2></h2>

                <ul id="toc" class="grid gap-3 divide-y-[1px] divide-primary-90 space-y-3"></ul>

            </div>

        </div>

        <div class="py-3"></div>

        <!-- Services Category -->
        <div class="bg-primary-100 p-5 rounded-3xl">

            <div class="text-h6 font-medium">
                <?php _e('دسته بندی ها', 'cyn-dm') ?>
            </div>

            <?php
            $service_terms = get_terms([
                'taxonomy' => 'service-cat',
                'orderby' => 'name',
                'hide_empty' => 0,
            ]);
            ?>

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

                <?php wp_reset_postdata() ?>

                <?php endforeach; ?>

            </div>
        </div>

    </div>
</div>