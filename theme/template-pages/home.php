<?php
/**
 * Template name: Home
 */
get_header();

get_template_part( 'template-parts/home/hero' );
get_template_part( 'template-parts/home/intro' );
get_template_part( 'template-parts/home/video' );
get_template_part( 'template-parts/home/news' );
get_template_part( 'template-parts/home/projects' );
get_template_part( 'template-parts/home/marquee' );
get_template_part( 'template-parts/home/members' );
get_template_part( 'template-parts/home/become-member' );

get_footer();