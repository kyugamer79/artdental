<div>
    <div class="contact-container">
        <form action="#" class="comment-form waituk_contact-form">
            <div class="">
                <?php comment_form([
                    'fields' => [
                        'author' => '<div class="form-group">
                                        <input placeholder="نام شما" type="text" class="form-control w-full px-3 rounded-3xl py-2" name="author">
                                    </div>',

                        'email' => '<div class="form-group">
                                        <input placeholder="ایمیل شما" type="email" class="form-control w-full px-3 rounded-3xl py-2" name="email">
                                    </div>',
                        'cookies' => '',
                    ],
                    'comment_field' => '<div class="order-3">
                                    <textarea placeholder="نظر شما" class="form-control w-full h-17 px-3 rounded-3xl py-4" name="comment"></textarea>
                                </div>',
                    'comment_notes_before' => '',
                    'class_form' => 'sss',
                    'class_container' => 'grid gap-4',
                    'title_reply' => '',
                    'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
                    'title_reply_after' => '</h3>',
                    'submit_field' => '<div class="form-submit order-3 grid justify-items-end">%1$s %2$s</div>',
                    'class_submit'=> 'comment-submit-btn rounded-full flex gap-1 transition-all duration-300 cursor-pointer bg-gradient-to-t from-primary-50 to-primary-70 text-primary-100 shadow-md shadow-slate-400/50 hover:from-primary-20 hover:to-primary-20 px-4 py-2 text-body_s '
                ]); ?>
            </div>
        </form>
    </div>
</div>

<?php
if (have_comments()) :
?>
<div class="comment-list gap-20" id="comment-list">
    <?php
        $list = wp_list_comments(
            array(
                'walker'            => null,
                'max_depth'         => '',
                'style'             => 'div',
                'callback'          => null,
                'end-callback'      => null,
                'type'              => 'all',
                'page'              => '',
                'per_page'          => '',
                'avatar_size'       => 32,
                'reverse_top_level' => null,
                'reverse_children'  => '',
                'format'            => current_theme_supports('html5', 'comment-list') ? 'html5' : 'xhtml',
                'short_ping'        => true,
                'echo'              => true,

            )
        );
        ?>
</div>
<?php
else :
?>
<div class="comment-list">
    <p class="fs-h2 text-secondary-400">کامنتی ثبت نشده است</p>
</div>
<?php
endif;