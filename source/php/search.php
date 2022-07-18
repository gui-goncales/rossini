<?php 
get_header();
include 'svg.php';
?>
<main>
  <section>
    <div class="bannerDefault bannerHome">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <h2 class="animation-element slide-aparece">Resultados <br>de
              Busca
            </h2>
            <div class="btn_gradient btnDefault col-12 animation-element slide-aparece">
              <a href="#resultados"><?php echo $arrow; ?></a>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="imagem animation-element slide-aparece">
              <div class="imagemBanner animation-element slide-top">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/search_rossini.png" alt="" class="img-fluid">
              </div>
              <div class="arrow animation-element slide-aparece"><?php echo $arrowRight?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="page__results" id="resultados">
      <div class="container">
        <div class="row no-gutters">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php $img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
if(!empty($img)) {?>
          <div class="col-12 col-md-6 column">
            <div class=" img_blog" style="background: url('<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                                                                  echo $url; ?>')no-repeat center center; width: 100%; height: 300px; background-size: cover;"></div>
          </div>
          <div class="col-12 col-md-6 column">
            <a href="<?php the_permalink() ?>">
              <h1 class="title"><?php the_title(); ?></h1>
            </a>
            <div class="description animation-element slide-aparece"><?php echo excerpt('30'); ?></div>
            <div class="btnLeiaMais">
              <a href="<?php the_permalink() ?>">Saiba mais</a>
            </div>
          </div>
          <?php } else {?>
          <div class="col-12">
            <a href="<?php the_permalink() ?>">
              <h1 class="title"><?php the_title(); ?></h1>
            </a>
            <div class="description animation-element slide-aparece"><?php echo excerpt('30'); ?></div>
          </div>
          <?php } endwhile; else : ?>
          <div class="mensagem-erro col-12">
            <div class="icon"><?php echo $sorry; ?></div>
            <?php _e('Desculpe, não encontramos nada.'); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>