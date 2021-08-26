<?php
/**
 * Search Page template
 *
 * @author   Gustavo
 * @version  1.0.0
 */ 

get_header();
include get_template_directory() . ('/templates/nav-blog.php');

?>

<div id="searchpageblog">

<section>
    <div class="container">

        <div class="row pb-0">
            <div class="col-12">
                <h2 class="page-title">
                    <?php printf( __( 'Buscando por: %s', 'mb' ), '<span>' . get_search_query() . '</span>' ); ?>
                </h2>
            </div>
        </div>

        <div class="row">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="col-12 col-lg-4 pb-4">
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
			        <h2 class="octin c-preto">
				        <?php the_title(); ?>
			        </h2>
			        <small class="c-preto">
				        <?php the_time('F jS, Y'); ?>
			        </small>
		        </div>
	        </a>

            <?php endwhile; else : ?>
	            <p><?php esc_html_e( 'Desculpe não encontramos nada.' ); ?></p>
            <?php endif; ?>

        </div>
    </div>
</section>


<?php include get_template_directory() . ('/templates/footer-blog.php'); ?>
</div>


