<!--Single Service SideBar -->

<?php
$cats = get_categories([
    'taxonomy' => 'product_cat',
    'orderby' => 'id',
    'hide_empty' => true,
]);
?>


<div class="h-full">

    <div class="grid justify-evenly sticky top-3">
        <!-- Search -->
        <div class="bg-primary-100 p-5 rounded-3xl">

            <!-- Title  -->
            <div class="text-h6 pb-4">
                <?php _e('جستجو', 'cyn-dm') ?>
            </div>

            <!-- Input Search -->
            <form action="/">

                <div class="flex items-center gap-1 py-2 px-3 border border-l-primary-50 rounded-full">
                    <button type="submit">
                        <svg class="icon size-4">
                            <use href="#icon-search-loupe" />
                        </svg>
                    </button>

                    <div>
                        <input class="focus-visible:outline-0" type="search" value="<?php the_search_query() ?>"
                            id="search" name="s" placeholder="جستجو در مقالات">
                    </div>
                </div>
            </form>
        </div>

        <div class="py-3"></div>

        <!-- Table of Contents -->
        <div class="bg-primary-100 p-5 rounded-3xl">

            <!-- Title  -->
            <div class="text-h6 pb-4">
                <?php _e('جدول محتوایی', 'cyn-dm') ?>
            </div>

            <div id="toc-container">
                <h2></h2>
                <ul id="toc" class="divide-y-[1px] divide-primary-90 space-y-3">

                </ul>

            </div>

        </div>

        <div class="py-3"></div>

        <!-- Services Category -->
        <div class="bg-primary-100 p-5 rounded-3xl">

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