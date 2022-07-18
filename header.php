<!DOCTYPE html><html lang="pt_BR"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title> <?php
    if (is_home()) :

      bloginfo('name');

    elseif (is_category()) :

      single_cat_title();
      echo ' - ';
      bloginfo('name');

    elseif (is_single()) :

      single_post_title();
      echo ' - ';
      bloginfo('name');

    elseif (is_page()) :

      single_post_title();
      echo ' - ';
      bloginfo('name');

    else :

      wp_title('', true);

    endif;

    ?> </title><!-- Favicon --><!-- <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-16.png" sizes="16x16" type="image/png"> --><!-- <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo_favicon_.png" sizes="32x32" type="image/png"> --><!-- <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-48.png" sizes="48x48" type="image/png"> --><link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-62.png" sizes="62x62" type="image/png"><!--  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon-192.png" sizes="192x192" type="image/png"> --><!-- Depêndencias --><style type="text/css"> <?php $url=get_bloginfo('template_directory') . '/dist/css/style.css';

  $ch=curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);

  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $contents=curl_exec($ch);

  if (curl_errno($ch)) : echo curl_error($ch);

  $contents='';

  else : curl_close($ch);

  endif;

  if ( !is_string($contents) || !strlen($contents)) : $contents='';

  endif;

  $contents=str_replace('../img/', get_bloginfo('template_directory') . '/dist/img/', $contents);

  $contents=str_replace('../fonts/', get_bloginfo('template_directory') . '/dist/fonts/', $contents);

  echo $contents;
  ?> </style> <?php
  // CALL TO SVG
  include 'svg.php';
  ?> </head><header><h1 class="ocultar">Rossini Comunicação Inteligente</h1><div class="header col-12"><div class="container"><div class="row no-gutters"><div class="menu_mobile"><label class="toggle"><input type="checkbox"><div><div><span></span> <span></span></div><svg><use xlink:href="#path"></use></svg> <svg><use xlink:href="#path"></use></svg></div></label><div class="textMenu">Menu</div><svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" id="path"><path d="M22,22 L2,22 C2,11 11,2 22,2 C33,2 42,11 42,22"></path></symbol></svg><ul class="contentMenu"><li><a href="<?php echo get_home_url(); ?>">Home</a></li><li><a href="<?php echo get_home_url(); ?>/quem-somos">Quem Somos</a></li><li><a href="<?php echo get_home_url(); ?>/quem-somos">Portfólio</a></li><li><button id="openDrop2">Serviços</button><div class="dropDownMobile dropDownMobile2"><div class="itemDrop"><a href="<?php echo home_url(); ?>/fachada">Fachada</a></div><div class="itemDrop"><a href="<?php echo home_url(); ?>/frota">Frota</a></div><div class="itemDrop"><a href="<?php echo home_url(); ?>/impressao">Impressão</a></div><div class="itemDrop"><a href="<?php echo home_url(); ?>/objetos-em-acrilico">Objetos em Acrílico</a></div><div class="itemDrop"><a href="<?php echo home_url(); ?>/termomoldagem">Termomoldagem</a></div></div></li><li><a href="<?php echo home_url(); ?>/blog">Blog</a></li><li><a href="<?php echo get_home_url(); ?>/contato">Contato</a></li></ul></div><div class="menu_desktop col-5"><ul><li id="home"><a href="<?php echo home_url(); ?>">Home</a></li><li id="quem-somos"><a href="<?php echo home_url(); ?>/quem-somos">Quem Somos</a></li><li id="portfolio"><a href="<?php echo home_url(); ?>/portfolio">Portfólio</a></li><li id="servicos"><a href="#">Serviços <?php echo $arrowDownMenu; ?></a><div class="submenu"><div id="fachada" class="item"><a href="<?php echo home_url(); ?>/fachada">Fachada</a></div><div id="frota-servicos" class="item"><a href="<?php echo home_url(); ?>/frota">Frota</a></div><div id="impressao-servicos" class="item"><a href="<?php echo home_url(); ?>/impressao">Impressão</a></div><div id="objetos-em-acrilico-servicos" class="item"><a href="<?php echo home_url(); ?>/objetos-em-acrilico">Objetos em Acrílico</a></div><div id="termomoldagem-servicos" class="item"><a href="<?php echo home_url(); ?>/termomoldagem">Termomoldagem</a></div></div></li><li id="blog"><a href="<?php echo home_url(); ?>/blog">Blog</a></li><li id="contato"><a href="<?php echo home_url(); ?>/contato">Contato</a></li></ul></div><div class="logo col-10 col-md-6 col-lg-3 col-xl-2"><a href="<?php echo home_url(); ?>"><img src="<?php the_field('insira_o_logo', 'option') ?>" alt="" class="img-fluid"></a></div><div class="search col-12 col-md-7 col-lg-3 col-xl-3"><form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>"><div class="icon"><button type="submit" name="button"> <?php echo $loupe; ?> </button></div><input type="hidden" name="search-type" value="normal"> <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>" name="s" title="<?php echo esc_attr_x( 'Buscar', 'label' ) ?>"></form></div><div class="redes_socias col-4 col-lg-1 col-xl-2"><div class="item"><a href="https://pt-br.facebook.com/acrilicosrossini/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo-do-facebook.png" alt="" class="img-fluid"></a></div><div class="item"><a href="https://www.instagram.com/rossiniacrilicos/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logotipo-do-instagram.png" alt="" class="img-fluid"></a></div></div></div></div></div></header></html>