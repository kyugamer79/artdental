<?php
$features = get_field( 'features_group' ) ?? [];
$features = array_filter( $features );

?>

<div class="grid grid-cols-2 max-lg:grid-cols-1 container">
	<?php
	$counter = 0;
	foreach ( $features as $index => $featureGroup ) :
		$counter++;
		?>
		<div
			 class="flex max-h-[150px] max-md:max-h-[100px] <?php echo in_array( $counter, [ 3, 4, 7, 8 ] ) ? 'flex-row' : 'flex-row-reverse' ?> <?php echo $counter % 2 == 0 ? 'max-lg:flex-row' : 'max-lg:flex-row-reverse' ?>">
			<div class="bg-primary-90 flex justify-center items-center flex-1 fade-in text-h6 max-lg:text-body_s"
				 anim-delay="<?php echo strval( $counter * 0.1 ) ?>">
				<?php echo $featureGroup['feature_text'] ?>
			</div>

			<div class="flex-1 fade-in grayscale"
				 anim-delay="<?php echo strval( $counter * 0.1 ) ?>">
				<?php echo wp_get_attachment_image( $featureGroup['feature_image'], 'medium', false, [ 'class' => 'w-full h-full object-cover' ] ) ?>
			</div>
		</div>
	<?php endforeach; ?>
</div>