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
$custom_field = get_field('link_externo');



?>

 


<div id="fullpageblog">
	
	<!-- Start the Loop. -->
<?php

$maxpost = new WP_Query( array( 'posts_per_page' => 3 ) ); 
$i = 0;
if ( $maxpost-> have_posts() ) : while ( $maxpost-> have_posts() ) : $maxpost-> the_post();
$do_not_duplicate[] = $post->ID;
?>

<?php if ($i == 1) :?>
		<section class="section two my-5 my-lg-0">
<?php else :?>
		<section class="section one">
<?php endif;?>
			<div class="container mb-5">
				<div class="row pb-lg-0 align-items-center">
					<div class="col-lg-8 col-12">
						<div class="postthumb">
							<?php the_post_thumbnail();?>
						</div>
					</div>
					<div class="col-lg-4 col-12 align-items-center align-items-lg-start d-flex flex-column">
						<h2 class="octin post-tittle mb-0">
							<?php the_title(); ?>
						</h2>
						<small class="tahoma mb-3">
							<?= get_the_date('d'). ' ' . 'de' . ' ' . get_the_date('F') . ' ' . 'de' . ' ' . get_the_date('Y'); ?>
						</small>

					<?php if (has_post_format( 'link' )) :?>
						<a href="<?php echo $custom_field; ?>" rel="bookmark" title="Link direto para <?php the_title_attribute();?>" class="btn bgc-amarelo-blog bgc-amarelo c-preto octin">
							LEIA MAIS
						</a>
					<?php else :?>
						<a href="<?php the_permalink(); ?>" target="_blank" rel="bookmark" title="Link direto para <?php the_title_attribute();?>" class="btn bgc-amarelo-blog bgc-amarelo c-preto octin">
							LEIA MAIS
						</a>
					<?php endif;?>
					
					</div>
				</div>
			</div>
		</section>


<?php
$i++;
endwhile; else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

	<section class="mt-5 mt-lg-0 mb-5 pb-5" id="carouselblog">
		<div class="container">
			<div class="carousel-blog px-0">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
					if ( in_array( $post->ID, $do_not_duplicate ) ) continue; 
					?>

						<?php if (has_post_format( 'link' )) :?>
							<a href="<?php echo $custom_field; ?>" target="_blank" class="carousel-cell col-12 col-lg-4">
						<?php else :?>
							<a href="<?php the_permalink(); ?>" target="_blank" class="carousel-cell col-12 col-lg-4">
						<?php endif;?>

							<div class="card-image">
							<?php the_post_thumbnail();?>
						</div>
						<div class="card-text">
							<small class="c-amarelo">
								<?php
									$categories = get_the_category(); 
									$category_list = join( ', ', wp_list_pluck( $categories, 'name' ) );
									echo wp_kses_post( $category_list );
								?>
                    		</small>
							<h2 class="octin">
								<?php the_title(); ?>
							</h2>
							<small class="tahoma">
								<?= get_the_date('d'). ' ' . 'de' . ' ' . get_the_date('F') . ' ' . 'de' . ' ' . get_the_date('Y'); ?>
							</small>
						</div>
					</a>

			<?php endwhile; endif; ?>

			</div>
		</div>
	</section>

	<?php 

	include get_template_directory() . ('/templates/footer-blog.php');
	?>
</div>


