<?php

$postId = $args['post-id'] ?? get_the_ID();

if ($postId === 0) {
	throw new ErrorException('post id is invalid', 0, E_WARNING);
}

?>

<div class="bg-background-card_1 rounded-xl p-6 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
    <div class="">
        <div class="text-h5">
            <?php echo get_the_title($postId) ?>
        </div>

        <div class="text-body-s">
            <?php echo get_field('expert', $postId) ?>
        </div>
    </div>

    <div class="divide-y divide-primary-80 space-y-10 pt-3">
        <div class="flex justify-center items-center">
            <?php echo get_the_post_thumbnail($postId, 'medium', ['class' => 'rounded-full aspect-square size-[250px] object-cover']) ?>
        </div>

        <div class="flex justify-between items-center pt-5">
            <cyn-button type="secondary-dark" href="<?php echo get_permalink($postId) ?>" size="sm">
                <?php _e('درباره پزشک', 'cyn-dm') ?>
            </cyn-button>

            <div class="flex gap-2">
                <?php for ($i = 0; $i < 10; $i++) :
					$social_url = get_field("social_group_social_" . $i . "_social_link", $postId);
					$social_img = get_field("social_group_social_" . $i . "_social_image", $postId);

					if (!$social_img || !$social_url)
						continue;
				?>

                <a href="<?php echo $social_url ?>">
                    <?php echo wp_get_attachment_image($social_img) ?>
                </a>

                <?php endfor; ?>
            </div>
        </div>
    </div>

</div>