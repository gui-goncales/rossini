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
            <h2 class="animation-element slide-aparece">Entre em <br>
              Contato
            </h2>
            <div class="subtitle animation-element slide-aparece">Peças em acrílico, termo moldagem, impressão, frota e muito mais. Clique no botão abaixo e preencha o formulário.</div>
            <div class="btn_gradient btnDefault col-12 animation-element slide-aparece">
              <a href="#entre-em-contato"><?php echo $arrow; ?></a>
            </div>
            <div class="fraseBanner">
              <div class="col-4 animation-element slide-aparece">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Telecommuting-rafiki.png" alt="" class="img-fluid">
              </div>
              <div class="col-8">
                <div class="texto animation-element slide-aparece">
                  <div class="imagemAspas"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/aspas.png" alt="" class="img-fluid"></div>
                  Nos tornamos referência em toda
                  a região em cada um de nossos
                  serviços. Solicite um orçamento
                  e mude de vez a sua
                  comunicação visual.
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="imagem animation-element slide-aparece">
              <div class="imagemBanner animation-element slide-top">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_contato.png" alt="" class="img-fluid">
              </div>
              <div class="arrow animation-element slide-aparece"><?php echo $arrowRight?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="contatoPage">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <div class="formulario animation-element slide-aparece" id="entre-em-contato">
              <?php echo do_shortcode('[contact-form-7 id="13" title="Contato"]'); ?>
            </div>
          </div>
          <div class="col-12 col-md-5 column">
            <div class="telefones"><?php echo $phone; ?> <span>19 3411.4685</span></div>
            <div class="telefones"><?php echo $whatsapp;?> <span>19 3374.4148</span></div>
            <div class="endereco"><?php echo $maps; ?> <span class="col-lg-10">Av. Mary Nassif Curioacos, 101,
                Jardim Ipanema - Piracicaba/SP.</span></div>

            <div class="maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.3368223665434!2d-47.62401738556417!3d-22.75287813811616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c63014116088c1%3A0x8de769702fa03219!2sAv.%20Mary%20Nassif%20Curiacos%2C%20101%20-%20Jardim%20Ipanema%2C%20Piracicaba%20-%20SP%2C%2013425-396!5e0!3m2!1spt-BR!2sbr!4v1631289480309!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
<script>
jQuery("#contato").addClass("activeMenu");
jQuery("#contatoFooter").addClass("activeMenuFooter");
</script>