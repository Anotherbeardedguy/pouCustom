<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-gray-100 font-sans leading-normal text-gray-800 flex flex-col w-fullantialiased' ); ?>>
<div class="site-container row container w-full mx-auto h-full">
<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header>
	<div id="content" class="site-content flex-grow relative">

<?php if ( is_front_page() ) { ?>
<div class="hero-container flex flex-col container flex-nowrap   sm:h-[640px]  z-0 bg-cover"
style="background-image:url('<?php echo get_theme_mod( 'hero-image' ); ?>')">

<div class="flex flex-row items-top z-50">
<div class="flex justify-between   w-full space-x-4w py-2">
<div class=" flex-initial ">

<?php the_custom_logo(); ?>
				
</div>
<?php
		wp_nav_menu(
			array(
				'container_id'    => 'primary-menu',
				'container_class' => 'hidden bg-gray-100 lg:bg-transparent lg:-mr-36 lg:block flex flex-gow nav mt-6 flex-grow: 1',
				'menu_class'      => 'lg:flex lg:-mx-4 flex sm:justify-center space-x-4',
				'theme_location'  => 'primary',
				'li_class'        => 'lg:mx-4',
				'fallback_cb'     => false,
			)
		);
		?>
<div class="flex justify-center lg:mr-36 lg:mt-16">
	<div class=" flex flex-row items-top align-content: flex-start;">
		<div class="flex border-none h-6">

			<input type="search" class="search " placeholder="Etsi" aria-label="Search"
				aria-describedby="">
			<svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
				xmlns="http://www.w3.org/2000/svg">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
				</path>
			</svg>
		</div>
	</div>
</div>
</div>

</div>
<div class="flex flex-row">
  <div class="flex flex-col  w-full justify-center items-center ">
	  <div class="sm:flex h-36 mt-1 ">
		  <h1>Järjestetään jotain johonkin</h1>
	  </div>
	  <div class="">
		  <button class="callToAction-btn" type="button">Ota Yhteyttä</button>

	  </div>
  </div>
</div>

</div>
	</header>


  <?php } ?>
  <?php if ( !is_front_page() ) { ?>
<div class="hero-container flex flex-col container flex-nowrap   sm:h-[140px]  z-0 bg-cover"
style="background-image:url('<?php echo get_theme_mod( 'hero-image' ); ?>')">

<div class="flex flex-row items-top z-50">
	<div class="flex justify-between   w-full space-x-4w py-2">
		<div class=" flex-initial ">

		<?php the_custom_logo(); ?>
						
			</div>
			<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden bg-gray-100 lg:bg-transparent lg:-mr-36 lg:block flex flex-gow nav mt-6 flex-grow: 1',
							'menu_class'      => 'lg:flex lg:-mx-4 flex sm:justify-center space-x-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4',
							'fallback_cb'     => false,
						)
					);
					?>
				<div class="flex justify-center lg:mr-36 lg:mt-16">
					<div class=" flex flex-row items-top align-content: flex-start;">
						<div class="flex border-none h-6">

							<input type="search" class="search " placeholder="Etsi" aria-label="Search"
								aria-describedby="">
							<svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
								</path>
							</svg>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
				</div>
	</header>


  <?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
