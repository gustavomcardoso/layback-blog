<form role="search" method="get" id="searchform"
    class="searchform mb-0" action="<?php echo esc_url( home_url( '/' ) ); ?>">

        <input type="submit" id="searchsubmit" se value="<?php echo esc_attr_x( '', 'Pesquisar' ); ?>" ></button>

        <label class="screen-reader-text d-none" for="s"><?php _x( 'Pesquisar por:', 'input' ); ?></label>

        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />

        <input type="button" id="open"/>
    
</form>

