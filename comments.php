<div>
    <div class="contact-container">
        <form action="#" class="comment-form waituk_contact-form row">
            <div class="row">
                <?php comment_form([
                    'fields' => [
                        'author' => '<div class="col-sm-6 form-group">
                                        <input placeholder="نام شما" type="text" class="form-control" name="author">
                                    </div>',

                        'email' => '<div class="col-sm-6 form-group">
                                        <input placeholder="ایمیل شما" type="email" class="form-control" name="email">
                                    </div>',
                        'cookies' => '',
                    ],
                    'comment_field' => '<div class="order-3">
                                    <textarea placeholder="نظر شما" class="form-control" name="comment"></textarea>
                                </div>',
                    'comment_notes_before' => '',
                    'class_form' => 'sss',
                    'class_container' => 'grid gap-2',
                    'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
                    'title_reply_after' => '</h3>',
                    'submit_field' => '<div class="form-submit order-3">%1$s %2$s</div>'
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