<?php
$rootPath    = '..';
$currentPage = 'proyectos';
$pageTitle   = 'Proyectos';
$pageDesc    = 'Nuestras principales líneas de trabajo y el recorrido construido hacia el empoderamiento de comunidades.';
$extraCss    = 'proyectos.css';

require $rootPath . '/includes/head.php';
require $rootPath . '/includes/navbar.php';
?>

<!-- ===== HERO ===== -->
<section class="proyectos-hero">
  <div class="container">
    <div class="row align-items-center g-5">

      <div class="col-lg-6 fade-in">
        <span class="section-label">Nuestros proyectos</span>
        <h1 class="section-title" style="font-size: clamp(2rem, 4vw, 3rem);">
          Acciones concretas para<br>comunidades <em style="font-style:normal; color:var(--coral)">reales</em>
        </h1>
        <p class="text-muted-ge mt-3" style="font-size:17px">
          Compartimos nuestras principales líneas de trabajo y el recorrido que hemos construido
          hasta ahora. Organizamos nuestras acciones en pilares clave que reflejan nuestro
          compromiso con el empoderamiento de las personas y el desarrollo sostenible
          de las comunidades.
        </p>
      </div>

      <div class="col-lg-6 fade-in fade-in-delay">
        <div class="proyectos-hero-grid">
          <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3366.jpg"
               alt="Proyectos en el terreno" class="proyectos-hero-img proyectos-hero-img-main">
          <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3433.jpg"
               alt="Comunidades rurales" class="proyectos-hero-img proyectos-hero-img-sm">
          <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3343.jpg"
               alt="Trabajo comunitario" class="proyectos-hero-img proyectos-hero-img-sm">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== PROYECTO 1: GRUPOS DE MADRES ===== -->
<section class="section-padding fade-in">
  <div class="container">
    <div class="row align-items-center g-5">

      <div class="col-lg-6">
        <div class="proyecto-img-wrap">
          <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3534.jpg"
               alt="Grupos de madres" class="proyecto-img">
          <span class="proyecto-categoria proyecto-categoria-coral">Emprendimiento femenino</span>
        </div>
      </div>

      <div class="col-lg-6 fade-in fade-in-delay">
        <span class="section-label">Proyecto 01</span>
        <h2 class="section-title">Grupos de madres</h2>
        <p class="text-muted-ge">
          Un programa diseñado para acompañar a mujeres rurales en el desarrollo de sus
          capacidades, facilitando formación técnica y acceso a microcréditos para que puedan
          construir su autonomía económica y garantizar la seguridad alimentaria de sus familias.
        </p>
        <div class="proyecto-pilares mt-4">
          <div class="proyecto-pilar">
            <i class="bi bi-flower1"></i>
            Formación técnica
          </div>
          <div class="proyecto-pilar">
            <i class="bi bi-cash-coin"></i>
            Acceso a microcréditos
          </div>
          <div class="proyecto-pilar">
            <i class="bi bi-house-heart"></i>
            Seguridad alimentaria
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== SEPARADOR ===== -->
<div class="proyectos-sep"></div>

<!-- ===== PROYECTO 2: ALIANZAS POR EL FUTURO ===== -->
<section class="section-padding fade-in">
  <div class="container">
    <div class="row align-items-center g-5 flex-lg-row-reverse">

      <div class="col-lg-6">
        <div class="proyecto-img-wrap">
          <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3770.jpg"
               alt="Alianzas por el futuro" class="proyecto-img">
          <span class="proyecto-categoria proyecto-categoria-verde">Medio ambiente con enfoque de género</span>
        </div>
      </div>

      <div class="col-lg-6 fade-in fade-in-delay">
        <span class="section-label">Proyecto 02</span>
        <h2 class="section-title">Alianzas por el Futuro</h2>
        <p class="text-muted-ge">
          Proyecto enfocado en fortalecer el papel de las mujeres rurales como líderes en la
          protección del medio ambiente, promoviendo prácticas sostenibles que mejoren tanto
          la resiliencia climática como los medios de vida comunitarios.
        </p>
        <div class="proyecto-pilares mt-4">
          <div class="proyecto-pilar">
            <i class="bi bi-tree"></i>
            Liderazgo ambiental
          </div>
          <div class="proyecto-pilar">
            <i class="bi bi-wind"></i>
            Resiliencia climática
          </div>
          <div class="proyecto-pilar">
            <i class="bi bi-people-fill"></i>
            Redes comunitarias
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== GALERÍA ===== -->
<section class="proyectos-galeria section-padding fade-in">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label" style="color:var(--coral)">En el terreno</span>
      <h2 class="section-title" style="color:var(--arena)">El trabajo real,<br>en imágenes</h2>
    </div>
    <div class="proyectos-galeria-grid">
      <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3304.jpg" alt="Comunidad" class="galeria-img">
      <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3310.jpg" alt="Formación" class="galeria-img">
      <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3319.jpg" alt="Mujeres líderes" class="galeria-img">
      <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3320.jpg" alt="Trabajo en campo" class="galeria-img">
      <img src="<?= $rootPath ?>/assets/images/proyectos/IMG_7104.jpg"  alt="Proyecto" class="galeria-img">
      <img src="<?= $rootPath ?>/assets/images/proyectos/IMG_7111.jpg"  alt="Comunidad rural" class="galeria-img">
    </div>
  </div>
</section>

<!-- ===== ÚNETE ===== -->
<section class="section-padding fade-in">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Involúcrate</span>
      <h2 class="section-title">Únete a un Proyecto</h2>
    </div>
    <div class="row g-4 justify-content-center">

      <div class="col-md-4">
        <div class="unete-card h-100">
          <div class="unete-img-wrap">
            <img src="<?= $rootPath ?>/assets/images/proyectos/IMG_7906.jpg"
                 alt="Voluntariado" class="unete-img">
          </div>
          <div class="unete-body">
            <div class="unete-icon" style="background:rgba(95,113,97,0.1); color:var(--verde)">
              <i class="bi bi-hand-index-thumb"></i>
            </div>
            <h3>Sé Voluntario/a</h3>
            <p>Únete a nuestro equipo en el campo o de forma remota y ayuda a transformar comunidades vulnerables.</p>
            <a href="<?= $rootPath ?>/pages/contacto.php" class="btn btn-outline-ge rounded-pill px-4 mt-auto">
              Postular
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="unete-card unete-card-featured h-100">
          <div class="unete-img-wrap">
            <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3774.jpg"
                 alt="Donación" class="unete-img">
          </div>
          <div class="unete-body">
            <div class="unete-icon" style="background:rgba(255,136,91,0.12); color:var(--coral)">
              <i class="bi bi-heart-fill"></i>
            </div>
            <h3>Haz una Donación</h3>
            <p>Tu contribución financiera nos permite expandir el alcance de nuestros programas educativos.</p>
            <a href="<?= $rootPath ?>/pages/donar.php" class="btn btn-coral rounded-pill px-4 mt-auto">
              Donar ahora
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="unete-card h-100">
          <div class="unete-img-wrap">
            <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP4276_2.jpg"
                 alt="Alianzas" class="unete-img">
          </div>
          <div class="unete-body">
            <div class="unete-icon" style="background:rgba(166,75,42,0.1); color:var(--terracota)">
              <i class="bi bi-building"></i>
            </div>
            <h3>Alianzas con Significado</h3>
            <p>Colabora con nosotras como empresa para crear soluciones escalables y de largo plazo.</p>
            <a href="<?= $rootPath ?>/pages/contacto.php" class="btn btn-outline-ge rounded-pill px-4 mt-auto">
              Colaborar
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta-final section-padding text-center fade-in">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <h2 class="cta-title">¿Lista para ser parte<br>del <em>cambio</em>?</h2>
        <p class="cta-subtitle">
          Cada aportación, cada hora de voluntariado, cada alianza acerca a una mujer
          a la vida que merece vivir.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
          <a href="<?= $rootPath ?>/pages/donar.php" class="btn btn-coral btn-lg rounded-pill px-5">
            <i class="bi bi-heart-fill me-2"></i>Hacer una donación
          </a>
          <a href="<?= $rootPath ?>/pages/contacto.php" class="btn btn-outline-ge btn-lg rounded-pill px-5">
            Hazte socio/a
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require $rootPath . '/includes/footer.php';
require $rootPath . '/includes/scripts.php';
?>
