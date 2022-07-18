<?php 
get_header(); 
include 'svg.php'
?> <main><section><div class="bannerDefault bannerHome"><div class="container"><div class="row no-gutters"><div class="col-12 col-md-6"><h2 class="animation-element slide-aparece">Acompanhe nosso Blog</h2><div class="subtitle animation-element slide-aparece">Fique por dentro das útimas notícias. Leia abaixo as nossos posts.</div><div class="btn_gradient btnDefault col-12 animation-element slide-aparece"><a href="#post-blog"><?php echo $arrow; ?></a></div></div><div class="col-12 col-md-6"><div class="imagem animation-element slide-aparece"><div class="imagemBanner animation-element slide-top" style="padding: 0 20px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/banner_blog.png" alt="" class="img-fluid"></div></div></div></div></div></div></section><section><div class="blog__page" id="post-blog"><div class="container"><div class="row no-gutters"> <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'order' => 'DESC',
          'posts_per_page' => '-1',
          'paged' => $paged
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post(); ?> <div class="itemBlog col-12 col-md-6 animation-element slide-aparece"><div class="takeBlog"><div class="img_blog animation-element slide-aparece" style="background: url('<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                                                                                          echo $url; ?>')no-repeat center center;     background-size: contain; width: 100%; height: 240px;"></div><div class="date animation-element slide-aparece"><span><?php echo $calendar; ?></span> <?php echo get_the_date(); ?></div><h1 class="title animation-element slide-aparece"><?php the_title(); ?></h1><div class="description animation-element slide-aparece"><?php echo excerpt('28'); ?></div><div class="leiamais animation-element slide-aparece"><a href="<?php the_permalink() ?>">Leia mais</a></div></div></div> <?php endwhile; ?> </div></div></div></section></main> <?php get_footer(); ?> <script>jQuery("#blog").addClass("activeMenu");
jQuery("#blogFooter").addClass("activeMenuFooter");</script>