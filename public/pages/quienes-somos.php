<?php
$rootPath    = '..';
$currentPage = 'quienes-somos';
$pageTitle   = 'Sobre Nosotras';
$pageDesc    = 'Conoce nuestra historia, misión y el equipo que impulsa The Global Empowerment.';
$extraCss    = 'quienes-somos.css';

require $rootPath . '/includes/head.php';
require $rootPath . '/includes/navbar.php';
?>

<!-- ===== HERO ===== -->
<section class="sobre-hero">
  <div class="container">
    <div class="row align-items-center g-5 min-vh-sobre">

      <div class="col-lg-6 fade-in">
        <span class="section-label">Nuestra historia</span>
        <h1 class="section-title" style="font-size: clamp(2rem, 4vw, 3rem);">
          Lo que empezó como una convicción<br>
          hoy es un <em style="font-style:normal; color:var(--coral)">movimiento</em>
        </h1>
        <p class="text-muted-ge mt-3" style="font-size:17px">
          Lo que empezó como la convicción de que otro mundo es posible hoy es un movimiento
          que acompaña a comunidades a construir un futuro más justo, digno e inclusivo.
        </p>
      </div>

      <div class="col-lg-6 fade-in fade-in-delay">
        <div class="sobre-hero-img-wrap">
          <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3759.jpg"
               alt="The Global Empowerment en el terreno"
               class="sobre-hero-img">
          <div class="sobre-hero-badge">
            <i class="bi bi-globe-americas"></i>
            ONG de cooperación internacional
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== QUIÉNES SOMOS ===== -->
<section class="section-padding fade-in">
  <div class="container">
    <div class="row g-5 align-items-center">

      <div class="col-lg-6">
        <div class="row g-3">
          <div class="col-6">
            <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP4183.jpg"
                 alt="Trabajo en comunidad"
                 class="sobre-grid-img sobre-grid-img-tall">
          </div>
          <div class="col-6 d-flex flex-column gap-3">
            <img src="<?= $rootPath ?>/assets/images/proyectos/IMG_7097.jpg"
                 alt="Empoderamiento"
                 class="sobre-grid-img">
            <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3983.jpg"
                 alt="Comunidad"
                 class="sobre-grid-img">
          </div>
        </div>
      </div>

      <div class="col-lg-6 fade-in fade-in-delay">
        <span class="section-label">Quiénes somos</span>
        <h2 class="section-title">Comprometidas con la justicia social y la dignidad de todas las personas</h2>
        <p class="text-muted-ge">
          En The Global Empowerment somos una organización sin ánimo de lucro de cooperación
          internacional comprometida con la justicia social y la dignidad de todas las personas.
          Trabajamos junto a comunidades de todo el mundo para reducir las desigualdades,
          fortalecer el tejido social y abrir oportunidades reales de desarrollo.
        </p>
        <p class="text-muted-ge mt-3">
          Creemos firmemente en el empoderamiento de las mujeres y las niñas como motor de cambio.
          Impulsamos programas que promueven su liderazgo, autonomía económica y participación
          activa en la vida comunitaria y pública.
        </p>
        <p class="text-muted-ge mt-3">
          Nuestro trabajo se guía por la defensa de los derechos humanos, la igualdad de género
          y la construcción de sociedades más justas, inclusivas y resilientes. Cada proyecto,
          formación y alianza que desarrollamos tiene un mismo objetivo: que más personas puedan
          vivir libres de violencia, discriminación y pobreza, y que las comunidades se conviertan
          en protagonistas de su propio futuro.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ===== VALORES ===== -->
<section class="valores-strip section-padding fade-in">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Lo que nos guía</span>
      <h2 class="section-title">Nuestros valores</h2>
    </div>
    <div class="row g-4">
      <div class="col-sm-6 col-lg-3">
        <div class="valor-item">
          <div class="valor-item-icon" style="background:rgba(255,136,91,0.1); color:var(--coral)">
            <i class="bi bi-person-check-fill"></i>
          </div>
          <h3>Empoderamiento</h3>
          <p>Fomentamos la autonomía para que los individuos lideren procesos de cambio en sus propios entornos locales.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="valor-item">
          <div class="valor-item-icon" style="background:rgba(95,113,97,0.1); color:var(--verde)">
            <i class="bi bi-shield-check"></i>
          </div>
          <h3>Justicia Social</h3>
          <p>Buscamos la igualdad de oportunidades mediante la eliminación de barreras económicas y sociales históricas.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="valor-item">
          <div class="valor-item-icon" style="background:rgba(166,75,42,0.1); color:var(--terracota)">
            <i class="bi bi-eye"></i>
          </div>
          <h3>Integridad</h3>
          <p>Operamos con total transparencia en la gestión de programas y un compromiso ético inquebrantable.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="valor-item">
          <div class="valor-item-icon" style="background:rgba(255,255,255,0.1); color:var(--arena)">
            <i class="bi bi-graph-up-arrow"></i>
          </div>
          <h3>Impacto</h3>
          <p>Medimos cada iniciativa por la transformación real y sostenible que genera en las vidas de quienes servimos.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== EQUIPO ===== -->
<section class="section-padding fade-in" style="background-color:#ede5cd">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Las personas detrás</span>
      <h2 class="section-title">Nuestro Equipo</h2>
      <p class="text-muted-ge mx-auto" style="max-width:540px">
        Conoce a las personas apasionadas que impulsan nuestra misión de empoderamiento global.
        Un equipo dedicado a transformar vidas a través del desarrollo personal y social.
      </p>
    </div>

<div class="row g-4 justify-content-center align-items-stretch">
      <div class="col-md-6 col-lg-3">
        <div class="equipo-card h-100">
          <div class="equipo-img-wrap">
            <img src="<?= $rootPath ?>/assets/images/equipo/candelariaCarletti.png"
                 alt="Candelaria Carletti" class="equipo-img"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
            <div class="equipo-img-fallback" style="display:none">
              <i class="bi bi-person-fill"></i>
            </div>
          </div>
          <div class="equipo-body">
            <h3 class="equipo-nombre">Candelaria Carletti</h3>
            <span class="equipo-cargo">Presidenta cofundadora</span>
            <p class="equipo-bio">Trabajadora social con una sólida trayectoria en proyectos de cooperación internacional en diferentes contextos globales.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="equipo-card h-100">          
         <div class="equipo-img-wrap">
            <img src="<?= $rootPath ?>/assets/images/equipo/SohaylaSchtickzelle.png"
                 alt="Sohayla Schtickzelle" class="equipo-img"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
            <div class="equipo-img-fallback" style="display:none">
              <i class="bi bi-person-fill"></i>
            </div>
          </div>
          <div class="equipo-body">
            <h3 class="equipo-nombre">Sohayla Schtickzelle</h3>
            <span class="equipo-cargo">Vicepresidenta, tesorera y cofundadora</span>
            <p class="equipo-bio">Profesional especializada en comercio internacional, con un enfoque en cooperación al desarrollo y el fortalecimiento económico de comunidades rurales.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="equipo-card h-100">
          <div class="equipo-img-wrap">
            <img src="<?= $rootPath ?>/assets/images/equipo/HumbertoLopez.jpg"
                 alt="Humberto López Rodríguez" class="equipo-img"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
            <div class="equipo-img-fallback" style="display:none">
              <i class="bi bi-person-fill"></i>
            </div>
          </div>
          <div class="equipo-body">
            <h3 class="equipo-nombre">Humberto López Rodríguez</h3>
            <span class="equipo-cargo">Secretario</span>
            <p class="equipo-bio">Trabajador Social y técnico superior en energías renovables. Máster en mediación de conflictos con experiencia en gestión de proyectos de dinamización comunitaria y redes de ayuda mutua.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="equipo-card h-100">
          <div class="equipo-img-wrap">
            <img src="<?= $rootPath ?>/assets/images/equipo/AdrianaAranguez.jpeg"
                 alt="Adriana Aránguez" class="equipo-img"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
            <div class="equipo-img-fallback" style="display:none">
              <i class="bi bi-person-fill"></i>
            </div>
          </div>
          <div class="equipo-body">
            <h3 class="equipo-nombre">Adriana Aránguez</h3>
            <span class="equipo-cargo">Comunicación y desarrollo</span>
            <p class="equipo-bio">Desarrolladora web y mamá. Antes trabajé en sanidad, lo que me enseñó que la tecnología solo tiene
                sentido cuando está al servicio de las personas.</p>
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
        <h2 class="cta-title">Únete al <em>movimiento</em></h2>
        <p class="cta-subtitle">
          Colabora con nosotras para que más mujeres y niñas puedan vivir
          libres de violencia, discriminación y pobreza.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
          <a href="<?= $rootPath ?>/pages/contacto.php" class="btn btn-coral btn-lg rounded-pill px-5">
            Hazte socio/a
          </a>
          <a href="<?= $rootPath ?>/pages/proyectos.php" class="btn btn-outline-ge btn-lg rounded-pill px-5">
            Ver proyectos
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
