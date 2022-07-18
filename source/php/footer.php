<?php include 'svg.php'; ?>

<footer>
  <div class="footer">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-12 col-md-6 col-xl-3">
          <div class="logo col-12 col-md-10"><img src="<?php the_field('insira_o_logo', 'option') ?>" alt="" class="img-fluid"></div>
          <div class="description">Estamos no mercado desde 1998 e somos referência em comunicação visual.</div>
          <div class="redes_socias col-12 col-md-10">
            <div class="item">
              <a href="https://pt-br.facebook.com/acrilicosrossini" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo-do-facebook.png" alt="" class="img-fluid"></a>
            </div>
            <div class="item">
              <a href="https://www.instagram.com/rossiniacrilicos/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logotipo-do-instagram.png" alt="" class="img-fluid"></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-2">
          <ul>
            <li id="homeFooter"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li id="sobreFooter"><a href="<?php echo home_url(); ?>/quem-somos">Quem Somos</a></li>
            <li id="portfolioFooter"><a href="<?php echo home_url(); ?>/portfolio">Portfólio</a></li>
            <li id="servicosFooter"><a href="#">Serviços <?php echo $arrowDownMenu; ?></a></li>
            <li id="blogFooter"><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
            <li id="contatoFooter"><a href="<?php echo home_url(); ?>/contato">Contato</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
          <h2>Assine nossa Newsletter</h2>
          <div class="formulario col-12">
            <?php echo do_shortcode('[contact-form-7 id="14" title="Newsletter"]'); ?>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="telefones"><?php echo $phone; ?> <span>19 3411.4685</span></div>
          <div class="telefones"><?php echo $whatsapp;?> <span>19 3374.4148</span></div>
          <div class="endereco"><?php echo $maps; ?> <span>Av. Mary Nassif Curioacos, 101,
              Jardim Ipanema - Piracicaba/SP.</span></div>
        </div>

        <div class="allRights col-12">
          <span>© 2021 Rossini. Todos os direitos reservados.</span>
          <span>Desenvolvido por <a href="https://eagence.com.br" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_eagence.png" alt="" class="img-fluid"></a></span>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/js/iziModal.js"></script> -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/js/app.js"></script>
</body>

</html>