<?php
$postId = $args['post-id'] ?? get_the_ID();

if ( $postId === 0 ) {
	throw new ErrorException( 'post id is invalid', 0, E_WARNING );
}

?>


<div class="space-y-2">
	<div class="relative">
		<div>
			<?php echo get_the_post_thumbnail( $postId, 'large', [ 'class' => 'rounded-2xl aspect-video object-cover h-[280px] max-lg:h-[200px] object-top' ] ) ?>
		</div>

		<div class="absolute left-0 top-0">
			<div class="p-3 bg-primary-80 rounded-br-2xl relative">
				<svg width="22"
					 class="absolute right-0 top-0 translate-x-full fill-primary-80"
					 height="22"
					 viewBox="0 0 22 22"
					 fill="none"
					 xmlns="http://www.w3.org/2000/svg">
					<path d="M0 17.5V0H22C16 1.5 3 6.5 0 21.5V17.5Z" />
				</svg>

				<cyn-icon-button type="primary"
								 icon-position="left"
								 icon="#icon-icon">
				</cyn-icon-button>


				<svg width="22"
					 class="absolute left-0 bottom-0 translate-y-full fill-primary-80"
					 height="22"
					 viewBox="0 0 22 22"
					 fill="none"
					 xmlns="http://www.w3.org/2000/svg">
					<path d="M0 17.5V0H22C16 1.5 3 6.5 0 21.5V17.5Z" />
				</svg>
			</div>
		</div>
	</div>

	<div class="space-y-2">
		<div class="text-h5 text-primary-40">
			<?php echo get_the_title( $postId ) ?>
		</div>

		<div class="text-body text-primary-60">
			<?php echo get_the_excerpt( $postId ) ?>
		</div>
	</div>
</div>