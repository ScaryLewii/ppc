<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ppc
 */

?>

<header id="masthead" class="sticky top-0 bg-green h-[90px] flex items-center z-50 shadow-md">
	<div class="container flex justify-between items-center text-white">

		<a class="font-semibold text-2xl" href="<?= site_url() ?>">
			PPC VIETNAM
		</a>

		<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'ppc' ); ?>"
			class="text-lg"
		>
			<button class="block lg:hidden" aria-controls="primary-menu" aria-expanded="false" id="main-nav-control">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
					<path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
				</svg>
			</button>

			<div class="hidden lg:flex items-center gap-[40px]" id="main-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
				
				<?= do_shortcode( '[language-switcher]' ) ?>

			</div>
		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
