<?php
$acf_field = $args['acf_field'] ?? null;
$term_ids = $args['term_ids'] ?? [];
$type = $args['type'] ?? 'query';
$postId = $args['post-id'] ?? null;

$faq_group = [];

// Define query arguments for fetching FAQ posts by taxonomy
$query_args = [
	'post_type' => 'faq',
	'fields' => 'ids',
	'tax_query' => [
		[
			'taxonomy' => 'faq-cat',
			'field' => 'term_id', // corrected from 'filed' to 'field'
			'terms' => $term_ids,
		]
	]
];

// Fetch FAQs based on the type specified
if ($type === 'query') {
	$faq_group = get_posts($query_args);
} elseif ($type === 'acf') {
	$faq_group = get_field($acf_field, $postId);
}

// Ensure $faq_group is an array or object before proceeding
if (!is_array($faq_group) && !is_object($faq_group)) {
	return;
}
?>

<div class="py-6 px-4 bg-background-card_1 divide-y divide-primary-80 rounded-3xl">
	<?php foreach ($faq_group as $index => $postId) : ?>
		<?php if (!is_null($postId)) : ?>
			<?php cyn_get_card('faq', ['post-id' => $postId]) ?>
		<?php endif; ?>
	<?php endforeach; ?>
</div>