<?php 
get_header(); 
include 'svg.php';
?>
<main>
  <section>
    <div class="bannerHome bannerDefault">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <h2 class="animation-element slide-aparece">Mostre ousadia e personalidade</h2>
            <div class="subtitle col-12 col-md-10 col-lg-9 animation-element slide-aparece">Peças em acrílico, termo moldagem, impressão, frota e muito mais. Clique no botão abaixo e preencha o formulário.</div>
            <div class="btn_gradient col-12 animation-element slide-aparece">
              <a href="<?php echo home_url(); ?>/contato">Faça um orçamento <?php echo $arrow; ?></a>
            </div>

            <div class="fraseBanner">
              <div class="col-4 animation-element slide-aparece">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/machine3d.png" alt="" class="img-fluid">
              </div>
              <div class="col-8">
                <div class="texto animation-element slide-aparece">
                  <div class="imagemAspas"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/aspas.png" alt="" class="img-fluid"></div>
                  Nosso trabalho é muito mais do que operar
                  máquinas e apertar botões.
                  Para que o resultado seja efetivo, temos que
                  entender cada cliente.
                  O que ele deseja de nós, o que ele espera
                  de nós.
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="imagem animation-element slide-aparece">
              <div class="imagemBanner animation-element slide-top">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/imagem_banner.png" alt="" class="img-fluid">
              </div>
              <div class="arrow animation-element slide-aparece"><?php echo $arrowRight?></div>
              <div class="video col-md-10 animation-element slide-aparece">
                <video width="100%" controls>
                  <source src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/video_rossini.mp4" type="video/mp4">
                </video>
              </div>
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
              <div class="texto">Não é preciso argumentar muito para explicar a importância de uma fachada. Em contrapartida, muitos empresários ainda não a desenvolveram como gostariam.</div>
              <div class="vermais">
                <a href="<?php echo home_url(); ?>/fachada">Ver mais +</a>
              </div>
            </div>
            <div class="item col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 ">
              <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/car.png" alt="" class="img-fluid"></div>
              <h2>Frota</h2>
              <div class="texto">Ter uma frota com identidade visual é mais do que um capricho. É necessidade, em especial na prestação de serviços. </div>
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
              <div class="texto">O acrílico é um dos mais versáteis materiais para comunicação visual. Nesse sentido, a Rossini comunicação inteligente. </div>
              <div class="vermais">
                <a href="<?php echo home_url(); ?>/objetos-em-acrilico">Ver mais +</a>
              </div>
            </div>
            <div class="item col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 ">
              <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/thermoplastic.png" alt="" class="img-fluid"></div>
              <h2>Termomoldagem</h2>
              <div class="texto">O acrílico é um dos materiais mais utilizados na comunicação visual. Nesse sentido, moldar as peças em diferentes formatos. </div>
              <div class="vermais">
                <a href="<?php echo home_url(); ?>/termomoldagem">Ver mais +</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="aboutUs">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-lg-6">
            <h2 class="animation-element slide-aparece">Quem <br>Somos?</h2>
            <div class="texto animation-element slide-aparece">
              <p>Se a primeira impressão é a que fica, é melhor contar com a gente. Transformar ideias criativas em ferramentas de comunicação. Esse é o negócio da Rossini Comunicação Inteligente.</p>

              <p>A empresa está sediada em Piracicaba. Contudo, sua expertise e qualidade a fizeram conquistar clientes em todo o território nacional.</p>

              <p>Antes de mais nada, vamos falar de experiência. Estamos no mercado desde 1998 e somos referência em comunicação visual.

              <p>Nesse sentido, desenvolvemos um amplo leque de produtos e serviços. Fachadas com termo moldagem, peças em acrílico, impressões e plotagem de veículos são alguns exemplos.</p>
            </div>

            <div class="leiamais animation-element slide-aparece">
              <a href="<?php echo home_url(); ?>/quem-somos">Leia mais +</a>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="imagem animation-element slide-aparece">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/fachada_rossini.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="parceiros">
      <div class="container">
        <div class="row no-gutters">
          <h2 class="animation-element slide-aparece">Parceiros</h2>
          <div class="sliderParceiros animation-element slide-aparece">
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/grupo_unidas.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/hyundai.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/kalunga.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/raizen.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/acipi.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/mausa.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/sicoob.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/jardim_e_cia.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/emporio_centenario.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/ice.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/otica_cs.png" alt="" class="img-fluid"></div>
            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/renner.png" alt="" class="img-fluid"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="portfolio_home">
      <div class="container">
        <div class="row no-gutters">
          <h2 class="animation-element slide-aparece">Portfólio</h2>
          <div class="texto col-12 col-md-10 col-lg-8 col-xl-6 animation-element slide-aparece">
            <p> Não dá para falar em comunicação visual sem mostrar o que já foi feito. Nesse sentido, a Rossini tem muito para mostrar.</p>
          </div>

          <div class="takePortfolio col-12">
            <div id="menuPortfolio" class="menuPortfolio animation-element slide-aparece">
              <button class="btnOption" data-id="fachada_">Fachada</button>
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
</main>
<?php get_footer(); ?>
<script>
jQuery("#home").addClass("activeMenu");
jQuery("#homeFooter").addClass("activeMenuFooter");
</script>