<?php

$prices = get_field('prices') ?? [];
$title = $args['title'] ?? get_field('price_title');
$has_button = $args['has_button'] ?? true;

if (!is_array($prices) || count($prices) < 1) {
	$prices = get_posts([
		'post_type' => 'price',
		'posts_per_page' => 3,
		'fields' => 'ids',
	]);
}

?>
<div class="container space-y-4">
	<div class="flex justify-between items-center ">
		<div class="text-h1 max-md:text-h5 text-primary-100">
			<?php echo $title; ?>
		</div>

		<?php if (false !== $has_button): ?>
			<div class="flex gap-4 max-md:hidden">
				<button
					class="reservePopUpOpener rounded-full flex gap-1 transition-all duration-300 cursor-pointer text-primary-100 shadow-md shadow-slate-400/50 
					hover:bg-gradient-to-b hover:from-[#A60205] hover:to-[#FD4242] py-2 px-4 bg-gradient-to-b from-[#FD4242] to-[#A60205]"
					type="primary" size="md" href="#">
					<?php _e('رزرو نوبت آنلاین', 'cyn-dm') ?>
				</button>
			</div>
		<?php endif; ?>
	</div>

	<div class="flex gap-3 max-lg:flex-col">
		<?php foreach ($prices as $index => $price): ?>
			<div class="flex-1 fade-in-down" anim-delay="<?php echo $index * 0.7 ?>">
				<?php cyn_get_card('price', ['post-id' => $price, 'class' => 'min-h-[400px] max-lg:min-h-[240px]']) ?>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="flex flex-col gap-4 md:hidden">
		<div class="reservePopUpOpener">
			<button
				class="reservePopUpOpener rounded-full flex gap-1 transition-all duration-300 cursor-pointer text-primary-100 shadow-md shadow-slate-400/50 
					hover:bg-gradient-to-b hover:from-[#A60205] hover:to-[#FD4242] py-2 px-4 bg-gradient-to-b from-[#FD4242] to-[#A60205]"
				type="primary" size="md" href="#">
				<?php _e('مشاوره رایگان', 'cyn-dm') ?>
			</button>
		</div>
	</div>
</div>