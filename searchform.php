<?php include 'svg.php'; ?> <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>"><button type="submit" name="button"><div class="icon"><?php echo $loupe; ?></div></button> <input type="hidden" name="search-type" value="product"> <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( '', 'placeholder' ) ?>" name="s" title="<?php echo esc_attr_x( 'Buscar', 'label' ) ?>"></form>