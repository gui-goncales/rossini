<?php
get_header(); 
include 'svg.php';
?> <main><section><div class="bannerDefault bannerHome"><div class="container"><div class="row no-gutters"><div class="col-12 col-md-6"><div class="title">Blog</div><h2 class="animation-element slide-aparece"><?php the_title(); ?></h2><div class="btn_gradient btnDefault col-12 animation-element slide-aparece"><a href="#leia-mais"><?php echo $arrow; ?></a></div></div><div class="col-12 col-md-6"><div class="imagem animation-element slide-aparece" style="background: none;"><div class="imagemBanner animation-element slide-top"><img src="<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); echo $url; ?>" alt="" class="img-fluid"></div></div></div></div></div></div></section><section><div class="page_single_blog" id="leia-mais"><div class="container"><div class="row no-gutters"> <?php
            while ( have_posts() ) : the_post();
            the_content();
            endwhile;
            wp_reset_query();
            ?> </div></div></div></section> <?php get_footer(); ?> <script>jQuery("#blog").addClass("activeMenu");
  jQuery("#blogFooter").addClass("activeMenuFooter");</script></main>