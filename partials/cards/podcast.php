<?php
$postId = $args['post-id'] ?? get_the_ID();

if ($postId === 0) {
    throw new ErrorException('post id is invalid', 0, E_WARNING);
}
?>

<div
    class="relative overflow-hidden rounded-3xl h-full hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 after:content-[''] after:inset-0 after:absolute after:bg-gradient-to-t after:from-primary-0/30 after:to-primary-0/10 -z-10 isolate">
    <div class="h-full">
        <?php echo get_the_post_thumbnail($postId, 'medium', ['class' => 'w-full h-full object-cover']) ?>
    </div>

    <div class="absolute inset-0 flex flex-col justify-between text-primary-100 z-10">
        <div class="flex justify-end">
            <div class="p-4 bg-background-main rounded-br-2xl relative">
                <svg width="22" class="absolute right-0 top-0 translate-x-full fill-background-main" height="22"
                    viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 17.5V0H22C16 1.5 3 6.5 0 21.5V17.5Z" />
                </svg>

                <cyn-button type="primary" icon-position="left" icon="#icon-microphone">
                    <?php _e('پخش پادکست', 'cyn-dm') ?>
                </cyn-button>


                <svg width="22" class="absolute left-0 bottom-0 translate-y-full fill-background-main" height="22"
                    viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 17.5V0H22C16 1.5 3 6.5 0 21.5V17.5Z" />
                </svg>
            </div>
        </div>

        <div class="p-6 text-h6 z-10">
            <span class="line-clamp-1">
                <?php echo get_the_title($postId) ?>
            </span>
        </div>
    </div>
</div>