<?php
$blogs = get_field('blogs') ?? [];

if (! is_array($blogs) || count($blogs) < 1) {
	$blogs = get_posts([
		'posts_per_page' => 3,
		'fields' => 'ids',
	]);
}


?>


<div class="container space-y-4">
	<div class="flex justify-between ">

		<span class="text-h1 max-lg:text-h5">
			<?php _e('مقالاتی که شاید به دردت بخوره', 'cyn-dm') ?>
		</span>


		<cyn-button type="secondary-dark"
			size="md" class="max-lg:hidden" href="<?php echo get_post_type_archive_link('post') ?>">
			<?php _e('مشاهده همه', 'cyn-dm') ?>
		</cyn-button>
	</div>

	<div class="columns-3 max-lg:hidden">
		<?php foreach ($blogs as $index => $postId) : ?>
			<div class="fade-in-down"
				anim-delay="<?php echo $index * 0.3 ?>">
				<?php cyn_get_card('post', ['post-id' => $postId, 'class' => 'min-h-[400px]']) ?>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="lg:hidden">
		<swiper-container slides-per-view="auto"
			space-between="12"
			pagination='true'>
			<?php foreach ($blogs as $index => $postId) : ?>
				<swiper-slide class="max-w-[340px] fade-in-down"
					anim-delay="<?php echo $index * 0.3 ?>">
					<?php cyn_get_card('post', ['post-id' => $postId, 'class' => 'min-h-[400px]']) ?>
				</swiper-slide>
			<?php endforeach; ?>
		</swiper-container>
	</div>

	<cyn-button type="secondary-dark"
		size="md"
		class="justify-center mt-3 lg:hidden"
		href="<?php echo get_post_type_archive_link('post') ?>">
		<?php _e('مشاهده همه', 'cyn-dm') ?>
	</cyn-button>
</div>