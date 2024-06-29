<?php
$post_categories = get_the_category();
$post_id = $args['post-id'] ?? get_the_ID();

?>



<main>
    <!-- blogs subject  -->
    <div class="text-primary-20 text-body">
        <a href="<?php the_permalink() ?>">
            <?php the_title() ?>
        </a>
    </div>

    <!-- blogs categories-->
    <div class="text-primary-40 text-body-s ">
        <?php foreach ($post_categories as $term) : ?>
            <a href="<?php echo get_term_link($term) ?>">
                <?php if ($term === end($post_categories)) : ?>
                    <?php echo $term->name ?>
                <?php else : ?>
                    <?php echo $term->name . ', ' ?>
                <?php endif; ?>
            </a>

        <?php endforeach; ?>
    </div>

</main>