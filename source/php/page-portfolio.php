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
            <h2 class="animation-element slide-aparece">Nossos projetos <br>
              mais recentes</h2>
            <div class="subtitle animation-element slide-aparece">Não dá para falar em comunicação visual sem mostrar o que já foi feito. Nesse sentido, a Rossini tem muito para mostrar. </div>
            <div class="btn_gradient btnDefault col-12 animation-element slide-aparece">
              <a href="#veja-nosso-portfolio"><?php echo $arrow; ?></a>
            </div>
            <div class="fraseBanner">
              <div class="col-4 animation-element slide-aparece">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/img_frase_portfolio.png" alt="" class="img-fluid">
              </div>
              <div class="col-8">
                <div class="texto animation-element slide-aparece">
                  <div class="imagemAspas"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/aspas.png" alt="" class="img-fluid"></div>
                  Não dá para falar em comunicação visual sem
                  mostrar o que já foi feito. Nesse sentido, a
                  Rossini tem muito para mostrar.
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="imagem animation-element slide-aparece">
              <div class="imagemBanner animation-element slide-top">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/banner_portfolio.png" alt="" class="img-fluid">
              </div>
              <div class="arrow animation-element slide-aparece"><?php echo $arrowRight?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="portfolio_home portfolioPage">
      <div class="container">
        <div class="row no-gutters">
          <h2 class="ocultar">Portfólio</h2>

          <div id="veja-nosso-portfolio" class="takePortfolio col-12">
            <div id="menuPortfolio" class="menuPortfolio animation-element slide-aparece">
              <button class="btnOption activeMenuPortfolio" data-id="fachada_">Fachada</button>
              <button class="btnOption" data-id="frota">Frota</button>
              <button class="btnOption" data-id="impressao">Impressão</button>
              <button class="btnOption" data-id="objetos-acrilicos">Objetos em Acrílico</button>
              <button class="btnOption" data-id="termomoldagem">Termomoldagem</button>
            </div>
            <div class="row no-gutters animation-element slide-aparece" id="mygallery">
              <div class="column show" id="fachada_">
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_8.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_8.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_5.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_5.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_7.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_7.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_9.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_9.png" alt="" class="img-fluid"></a></div>
              </div>
              <div class="column" id="frota">
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/img_frota-2.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/img_frota-2.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/img_frota_4.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/img_frota_4.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/img_frota_3.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/img_frota_3.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_1_frotas.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_1_frotas.png" alt="" class="img-fluid"></a></div>
              </div>

              <div class="column" id="impressao">
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_impressao_1.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_impressao_1.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_impressao_1.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_impressao_1.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_impressao_1.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_impressao_1.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_impressao_1.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_impressao_1.png" alt="" class="img-fluid"></a></div>
              </div>

              <div class="column" id="objetos-acrilicos">
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_objetos_acrilicos_2.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_objetos_acrilicos_2.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_objetos_acrilicos_4.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_objetos_acrilicos_4.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_acrilicos_3.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_acrilicos_3.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_objetos_acrilicos_4.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_objetos_acrilicos_4.png" alt="" class="img-fluid"></a></div>

              </div>

              <div class="column" id="termomoldagem">
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo  get_stylesheet_directory_uri(); ?>/dist/img/Imagem_termomoldagem_2.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_termomoldagem_2.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_termomoldagem_1.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_termomoldagem_1.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_termomoldagem_3.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_termomoldagem_3.png" alt="" class="img-fluid"></a></div>
                <div class="col-12 col-md-4 col-lg-3"><a data-fancybox="demo" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_termomoldagem_4.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/Imagem_termomoldagem_4.png" alt="" class="img-fluid"></a></div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="serviceText">
      <div class="container">
        <div class="row no-gutters">
          <h2 class="ocultar">Nosso trabalho é muito mais do que operar
            máquinas e apertar botões.
          </h2>

          <div class="col-12 col-md-6 column">
            <div class="col-4 animation-element slide-aparece">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/machine3d.png" alt="" class="img-fluid">
            </div>
            <div class="col-8">
              <div class="imagem animation-element slide-aparece"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/aspas.png" alt="" class="img-fluid"></div>
              <div class="texto animation-element slide-aparece">Nosso trabalho é muito mais do que operar
                máquinas e apertar botões.
                Para que o resultado seja efetivo, temos que
                entender cada cliente.
                O que ele deseja de nós, o que ele espera
                de nós. </div>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <div class="texto texto_portfolio animation-element slide-aparece">
              <p> E é por isso que nos tornamos referência em toda a região em cada um de nossos serviços.</p>

              <p> Conheça um pouco mais sobre eles. Solicite um orçamento e mude de vez a sua comunicação visual.</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="servicesHome">
      <div class="container">
        <div class="row no-gutters">
          <div class="takeServices col-11 col-xl-12 animation-element slide-aparece">
            <div class="item col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
              <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/fruit-shop.png" alt="" class="img-fluid"></div>
              <h2>Fachada</h2>
              <div class="texto">O método de impressão digital consiste na transferência de dados de um computador diretamente para uma impressora. </div>
              <div class="vermais">
                <a href="<?php echo home_url(); ?>/fachada">Ver mais +</a>
              </div>
            </div>
            <div class="item col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 ">
              <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/car.png" alt="" class="img-fluid"></div>
              <h2>Frota</h2>
              <div class="texto">O método de impressão digital consiste na transferência de dados de um computador diretamente para uma impressora. </div>
              <div class="vermais">
                <a href="<?php echo home_url(); ?>/frota">Ver mais +</a>
              </div>
            </div>
            <div class="item active col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
              <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/printer.png" alt="" class="img-fluid"></div>
              <h2>Impressão</h2>
              <div class="texto">O método de impressão digital consiste na transferência de dados de um computador diretamente para uma impressora. </div>
              <div class="vermais">
                <a href="<?php echo home_url(); ?>/impressao">Ver mais +</a>
              </div>
            </div>
            <div class="item col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
              <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/trophy.png" alt="" class="img-fluid"></div>
              <h2>Objetos em Acrílico</h2>
              <div class="texto">O método de impressão digital consiste na transferência de dados de um computador diretamente para uma impressora. </div>
              <div class="vermais">
                <a href="<?php echo home_url(); ?>/objetos-em-acrilico">Ver mais +</a>
              </div>
            </div>
            <div class="item col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 ">
              <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/thermoplastic.png" alt="" class="img-fluid"></div>
              <h2>Termomoldagem</h2>
              <div class="texto">O método de impressão digital consiste na transferência de dados de um computador diretamente para uma impressora. </div>
              <div class="vermais">
                <a href="<?php echo home_url(); ?>/termomoldagem">Ver mais +</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
<script>
jQuery("#portfolio").addClass("activeMenu");
jQuery("#portfolioFooter").addClass("activeMenuFooter");
</script>