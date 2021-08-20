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

// if ( have_posts() ) {
// 	while ( have_posts() ) {
// 		the_post();
?>
<!-- <article>
	<header>
		<h1><?php the_title(); ?></h1>
		</header>
		<?php the_content(); ?>
		</article>	 -->
		<!-- }
	} -->
	
<div id="fullpage">

	<section class="section one">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<?php get_the_post_thumbnail() ?>
				</div>
				<div class="col-lg-6 col-12">
					<h2 class="octin post-tittle">
						<?php the_title(); ?>
					</h2>
					<span class="date">
						<?php get_the_date();?>
					</span>

					<button class="btn bgc-amarelo-blog bgc-amarelo c-preto octin">
						LEIA MAIS
					</button>
				</div>
			</div>
		</div>
	</section>

	<section class="section two">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<h2 class="octin post-tittle">
						<?php the_title(); ?>
					</h2>
					<span class="date">
						<?php get_the_date();?>
					</span>
					<button class="btn bgc-amarelo-blog bgc-amarelo c-preto">
						LEIA MAIS
					</button>
				</div>
				<div class="col-lg-6 col-12">
					<?php get_the_post_thumbnail() ?>
				</div>
			</div>
		</div>
	</section>

	<section class="section three">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<?php get_the_post_thumbnail() ?>
				</div>
				<div class="col-lg-6 col-12">
					<h2 class="octin post-tittle">
						<?php the_title(); ?>
					</h2>
					<span class="date">
						<?php get_the_date();?>
					</span>
					<button class="btn bgc-amarelo-blog bgc-amarelo c-preto">
						LEIA MAIS
					</button>
				</div>
			</div>
		</div>
	</section>

</div>


<?php get_footer(); ?>
