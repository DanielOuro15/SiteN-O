<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>N&O Soluções</title>
    <link href="<?php echo e(asset('img/favicon.png')); ?>" rel="icon">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://kit.fontawesome.com/c2eaecad4c.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">
        <img src="<?php echo e(asset('img/logo.png')); ?>" alt="logo image">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">Portifólio</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contato</a>
          </li>
        </ul>
        <a class="btn-orcamento" href="https://api.whatsapp.com/send?phone=5561981992905">
            <button type="button" class="rounded-pill btn-rounded">
            +55 61 8199-2905
             <span>
                <i class="fas fa-phone"></i>
            </span>
            </button>
        </a>
      </div>
    </div>
  </nav>
<section id="home" class="intro-section">
  <div class="container">
    <div class="row align-items-center text-white">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-start">
        <h1 class="display-2">
          <span class="display-2--intro">Em Breve</span>
          <span class="display-2--description lh-base">
          </span>
        </h1>
        <a class="btn-orcamento" href="https://api.whatsapp.com/send?phone=5561981992905">
            <button type="button" class="rounded-pill btn-rounded">
                Orçamentos
            <span><i class="fas fa-arrow-right"></i></span>
            </button>
        </a>
      </div>
      <!-- START THE CONTENT FOR THE VIDEO -->  
      <div class="col-md-6 intros text-end">
        <div class="video-box">
          <img src="<?php echo e(asset('img/arts/intro-section-illustration.png')); ?>" alt="video illutration" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section><?php /**PATH C:\Users\User\Desktop\laravel projects\siteneo\resources\views/inicio.blade.php ENDPATH**/ ?>