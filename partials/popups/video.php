<?php
$id = $args['post-id'] ?? '';
$acf_field = $args['acf-field'] ?? '';
$acf_poster = $args['acf-poster'] ?? null;
$video = get_field($acf_field, $id);
$poster_url = $acf_poster ? wp_get_attachment_url(get_field($acf_poster, $id)) : get_the_post_thumbnail_url($id, 'full');

if (! $video)
	return;
?>

<div class="relative max-w-5xl ">
	<div class="absolute -top-11 bg-stone-800 rounded-full p-3 cursor-pointer"
		id="closePopUp">
		<svg class="icon size-6">
			<use href="#icon-xmark" />
		</svg>
	</div>

	<video class="plyr-video"
		playsinline
		controls
		autoplay
		data-poster="<?php echo $poster_url  ?>">

		<source src="<?php echo $video['url'] ?> "
			type="<?php echo $video['mime_type'] ?>" />

	</video>
	<div class="absolute -bottom-12 flex justify-center items-center bg-gradient-to-tl from-primary-70 to-primary-30 p-3 rounded-full text-primary-100">

		<div class=" flex justify-center items-center">
			<span class="text-lg"><?php echo get_the_title($id) ?></span>
		</div>
	</div>
</div>