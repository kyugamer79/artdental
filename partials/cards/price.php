<?php
$postId = $args['post-id'] ?? get_the_ID();
$class = $args['class'] ?? '';

if ($postId === 0) {
	throw new ErrorException('post id is invalid', 0, E_WARNING);
}

$table = [
	[
		'label' => __('برند', 'cyn-dm'),
		'value' => get_field('brand', $postId),
	],
	[
		'label' => __('کشور سازنده', 'cyn-dm'),
		'value' => get_field('country', $postId),
	],
	[
		'label' => __('قیمت هر واحد', 'cyn-dm'),
		'value' => get_field('price_per_unit_off', $postId) ?  number_format(intval(get_field('price_per_unit_off', $postId))) . ' ' . __('تومان', 'cyn-dm') . ' ' . '<span class="line-through">' . number_format(intval(get_field('price_per_unit', $postId))) . ' ' . __('تومان', 'cyn-dm') . '</span>' : number_format(intval(get_field('price_per_unit', $postId))) . ' ' . __('تومان', 'cyn-dm'),
	],
]
?>

<div class="h-full w-full p-6 max-lg:p-2 rounded-2xl bg-cover flex items-end <?php echo $class ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($postId) ?>');">

	<div class="text-primary-100 text-body max-lg:text-body_s divide-y divide-primary-100/20 bg-background-card_1/20 backdrop-blur-lg py-2 px-3 rounded-xl w-full">

		<?php foreach ($table as $index => $item) : ?>
			<div class="flex justify-between py-3 max-lg:py-2">
				<span>
					<?php echo $item['label'] ?>
				</span>
				<span>
					<?php echo $item['value'] ?>
				</span>
			</div>
		<?php endforeach; ?>

	</div>

</div>