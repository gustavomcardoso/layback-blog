<?php
/**
 * Index template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

get_header();
include get_template_directory() . ('/templates/nav-blog.php');

?>

<div id="fullpageblog">
	
	<!-- Start the Loop. -->
<?php
$i = 0;
if ( have_posts() ) : while ( have_posts() ) : the_post()?>

<?php if ($i == 1) :  ?>
	<section class="section two">
<?php else : ?>
	<section class="section one">
<?php endif; ?>

			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<?php get_the_post_thumbnail();?>
					</div>
					<div class="col-lg-6 col-12">
						<h2 class="octin post-tittle">
							<?php the_title(); ?>
						</h2>
						<small>
							<?php the_time('F jS, Y'); ?>
						</small>

						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute();?>" class="btn bgc-amarelo-blog bgc-amarelo c-preto octin">
							LEIA MAIS
						</a>
					</div>
				</div>
			</div>
		</section>

<?php
$i++;
endwhile; else : ?>


<!-- The very first "if" tested to see if there were any Posts to -->
<!-- display.  This "else" part tells what do if there weren't any. -->
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


<!-- REALLY stop The Loop. -->
<?php endif; ?>
</div>


<?php get_footer(); ?>
