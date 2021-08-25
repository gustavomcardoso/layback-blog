<?php
/**
 * Default post template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

get_header();
include get_template_directory() . ('/templates/nav-blog.php');
?>

<section id="singlepage">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1">
				<h1>
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1">
				<?php the_content(); ?>
			</div>
		</div>
	
	</div>
</section>

<?php
	include get_template_directory() . ('/templates/footer-blog.php');
	?>

</div>
