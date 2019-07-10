<!DOCTYPE html>
<html  lang="lang="<?php bloginfo('language'); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/medias.css">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favico.png" rel="shortcut icon" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127059279-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127059279-2');
</script>
<!-- Código de instalación Cliengo para www.contactmarketing.cl --> 
<script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5c868804e4b0be1140d65906/5cc647d6e4b073021426200b.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
   <?php wp_head(); ?>
</head>

<body>
  <!-- HEADER -->
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
          <img class="logo-navbar" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_white.png" alt="Logo Contact Marketing">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-flex" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo bloginfo('url'); ?>">Inicio <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="#services">Servicios</a>
            <a class="nav-item nav-link" href="#about">Conocenos</a>
            <a class="nav-item nav-link" href="#team">Equipo</a>
            <a class="nav-item nav-link " href="#blog">Blog</a>
            <a class="nav-item nav-link " href="#contact">Contáctanos</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <header class="fixed-2">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
          <img class="logo-navbar" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_CM.png" alt="Logo Contact Marketing">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-flex" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo bloginfo('url'); ?>">Inicio <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="#services">Servicios</a>
            <a class="nav-item nav-link" href="#about">Conocenos</a>
            <a class="nav-item nav-link" href="#team">Equipo</a>
            <a class="nav-item nav-link " href="#blog">Blog</a>
            <a class="nav-item nav-link " href="#contact">Contáctanos</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

