<?php
$postId = $args['post-id'] ?? get_the_ID();
$class = $args['class'] ?? '';
if ($postId === 0) {
    throw new ErrorException('post id is invalid', 0, E_WARNING);
}


?>

<div class="h-full w-full bg-cover rounded-3xl after:content-[''] after:absolute after:inset-0 after:bg-gradient-to-t after:to-primary-0/0 after:from-primary-0/40 after:-z-10 isolate relative overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 <?php echo $class ?>"
    style="background-image: url('<?php echo get_the_post_thumbnail_url($postId) ?>');">

    <a href="<?php echo get_permalink($postId) ?>">
        <div class="flex flex-col justify-between <?php echo $class ?>">

            <div class="flex justify-end">
                <div class="p-4 bg-background-main rounded-br-2xl relative">
                    <svg width="22" class="absolute right-0 top-0 translate-x-full fill-background-main" height="22"
                        viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 17.5V0H22C16 1.5 3 6.5 0 21.5V17.5Z" />
                    </svg>

                    <cyn-button type="primary" href="<?php echo get_permalink($postId) ?>">
                        <?php _e('ادامه مطلب', 'cyn-dm') ?>
                    </cyn-button>


                    <svg width="22" class="absolute left-0 bottom-0 translate-y-full fill-background-main" height="22"
                        viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 17.5V0H22C16 1.5 3 6.5 0 21.5V17.5Z" />
                    </svg>
                </div>
            </div>

            <div class="text-primary-100 text-h6 p-5">
                <?php echo get_the_title($postId) ?>
            </div>
        </div>
    </a>
</div>