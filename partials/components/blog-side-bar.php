<!-- Blog SideBar -->

<?php

$recommendPosts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'fields' => 'ids'
]);

?>

<?php
$post_categories = get_terms([
    'taxonomy' => 'category',
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

        <!-- Suggestion Blogs -->
        <div class="bg-primary-100 p-5 rounded-3xl">

            <div class="text-h6">
                <?php _e('مقالات پیشنهادی', 'cyn-dm') ?>
            </div>

            <div class="py-2"></div>

            <div class="grid gap-y-3 divide-y-[1px] divide-primary-90">

                <?php

                foreach ($recommendPosts as $recommendPost) : ?>
                <?php cyn_get_card('post-mini', ['post-id' => $recommendPost]) ?>
                <?php endforeach ?>

            </div>


        </div>

        <div class="py-3"></div>

        <!-- Category -->
        <div class="bg-primary-100 p-5 rounded-3xl">

            <div class="text-h6">
                <?php _e('دسته بندی ها', 'cyn-dm') ?>
            </div>

            <div class="py-2"></div>

            <div>
                <div class="">
                    <ul class="space-y-3 divide-y-[1px] divide-primary-90">
                        <?php foreach ($post_categories as $term) : ?>
                        <a href="<?php echo get_term_link($term) ?>" class="text-secondary-400 pt-3 block">

                            <li class="flex justify-between py-1 text-body_s">
                                <?php echo $term->name ?>
                                <span class="text-primary-50">
                                    <?php echo $term->count . 'مقاله'; ?>
                                </span>
                            </li>
                        </a>

                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>

        </div>

        <div class="py-3"></div>

        <!-- Tags -->
        <div class="bg-primary-100 p-5 rounded-3xl">

            <div class="text-h6">
                <?php _e('تگ ها', 'cyn-dm') ?>
            </div>

            <div class="py-2"></div>

            <div>
                <?php $tags = get_tags(); ?>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($tags as $tag) : ?>
                    <a class="bg-accent-90 text-accent-50 py-2 px-3 rounded-lg text-caption"
                        href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <div class="py-3"></div>

        <!-- Gallery -->
        <div class="bg-primary-100 p-5 rounded-3xl">

            <div class="text-h6">
                <?php _e('گالری تصاویر', 'cyn-dm') ?>
            </div>

            <div class="py-2"></div>

            <div>

                <?php $gallery = get_field('gallery_section') ?>

            </div>

        </div>

    </div>
</div>