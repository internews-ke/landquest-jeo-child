<?php get_header(); ?>

<?php
if(is_front_page()) {
	$options = jeo_get_options();
	if(!$options || (isset($options['front_page']) && $options['front_page']['front_page_map'] == 'latest'))
		jeo_featured();
	else
		get_template_part('content', 'featured');
	
	get_template_part('section', 'slider');
	
} else {
	jeo_featured();
}
?>

<?php get_template_part('loop'); ?>

<?php get_footer(); ?>