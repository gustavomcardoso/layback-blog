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

		<?php
			if (have_posts() ) : while (have_posts())  : the_post();
		?>
<div id="fullpageblog">

<section id="singlepage">
	<div class="container">

		<div class="row pb-0">
			<div class="col-12 col-lg-10 offset-lg-1" >
				<h1>
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
		<div class="row p-0 mt-2">
			<div class="col-12 col-lg-10 offset-lg-1">

				<small><?php echo get_avatar(get_the_author_meta('ID'), 32) ?> </small>
				<small class="pl-2"> <?php echo "Publicado por:" . " " . get_the_author(); ?> </small>
				<small class="offset-8"> <?php the_date() ?> </small>
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
endwhile; endif; 
?>


<section class="mt-5 mt-lg-0 mb-5 pb-5" id="carouselblog">
		<div class="container">
			<div class="carousel-blog px-0">

			<?php 
			$args = array('post_type' => 'post');
			$newquery = new WP_Query($args); 
			while ($newquery->have_posts() ) : $newquery->the_post(); 
			?>

					<a href="<?php the_permalink(); ?>" class="carousel-cell col-12 col-lg-4">
						<div class="card-image">
							<?php the_post_thumbnail();?>
						</div>

						<div class="card-text">
							<h2 class="octin">
								<?php the_title(); ?>
							</h2>
							<small>
								<?php the_time('F jS, Y'); ?>
							</small>
						</div>
					</a>
				

			<?php endwhile; ?>

			</div>
		</div>

</section>

<?php
	include get_template_directory() . ('/templates/footer-blog.php');
	?>

</div>
