<?php
$postId = $args['post-id'] ?? get_the_ID();

if ( $postId === 0 ) {
	throw new ErrorException( 'post id is invalid', 0, E_WARNING );
}
?>

<div class="h-full p-6"
	 style="background-image: url('<?php the_post_thumbnail_url() ?>');">



</div>