<?php

$cats = get_categories( [ 
	'taxonomy' => 'product_cat',
	'orderby' => 'id',
	'hide_empty' => true,
] );

$postId = $args['post-id'] ?? get_the_ID();
?>

<?php get_header() ?>

<!-- Bread Crumb -->
<?php cyn_get_component( 'breadcrumb' ) ?>

<!-- service main -->
<main class="container grid grid-cols-4 gap-6">

	<!-- Side Bar -->
	<section class="col-span-1 max-lg:col-span-4 max-lg:order-1">

		<?php cyn_get_component( "single-service-side-bar" ) ?>

	</section>

	<!-- Paragraph -->
	<section class="col-span-3 max-lg:col-span-4 max-xl:mx-5">


		<!--service Title  -->
		<div class="text-h1 max-lg:text-h3">
			<?php the_title() ?>
		</div>

		<div class="pt-4"></div>

		<!-- service Thumbnail -->
		<div>
			<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'full', false, [ 'class' => 'blog-thumbnail rounded-3xl my-0 aspect-video w-full object-cover' ] ) ?>
		</div>
		<div class="pb-4"></div>
		<!-- Table of content mobile  -->
		<div class="bg-primary-100 p-5 rounded-3xl md:hidden">
			<!-- Title  -->
			<div class="text-h6 pb-4 font-medium">
				<?php _e( 'جدول محتوایی', 'cyn-dm' ) ?>
			</div>
			<div id="mobile-toc-container flex flex-col">
				<h2></h2>
				<ul class="toc flex flex-col flex-auto gap-3 divide-y divide-primary-90"></ul>
			</div>
		</div>
		<div class="pb-4"></div>

		<!-- service Content -->
		<div
			 class="prose prose-table:max-md:px-0 prose-table:flex prose-table:text-caption prose-table:justify-center prose-table:items-center prose-table:divide-x prose-table:divide-primary-0 prose-table:overflow-hidden prose-img:w-full prose-img:rounded-3xl prose-img:object-cover min-w-full prose-table:overflow-x-auto prose-p:text-primary-50 prose-p:text-body_s prose-h4:text-h4 prose-h6:text-h6 prose-table:w-full [&_table]:table">
			<?php the_content() ?>
		</div>

		<!-- FAQ -->
		<?php if ( ! empty( get_field( 'faq-group', $postId ) ) ) : ?>

			<div class="pt-[93px]"></div>

			<div>
				<!-- Title -->
				<div class="text-h2">
					<?php echo __( 'سوالات متداول', 'cyn-dm' ) . '  ' . get_the_title() ?>
				</div>

				<div class="text-h2">

				</div>

				<div>
					<?php cyn_get_component( 'faq-group', [ 'type' => 'acf', 'acf_field' => 'faq-group', 'post-id' => $postId ] ) ?>
				</div>
			</div>

		<?php endif; ?>

		<div class="py-3"></div>

		<!-- CTA -->
		<div class="container fade-in-down"
			 anim-delay="0.8">
			<cyn-cta />
		</div>

		<div class="pt-[48px]"></div>

		<!-- Comments -->
		<?php cyn_get_component( 'single-comment' ) ?>

	</section>

	<!-- Comments For Mobile -->
	<?php cyn_get_component( 'mobile-res-comment' ) ?>

</main>

<div class="py-4"></div>

<?php get_footer() ?>
