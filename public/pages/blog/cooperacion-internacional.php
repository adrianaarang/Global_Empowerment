<?php
$rootPath    = '../..';
$currentPage = 'blog';
$pageTitle   = 'Cooperación internacional para el desarrollo: qué es y cómo funciona en la práctica';
$pageDesc    = 'Muchas personas quieren colaborar con causas globales, pero no saben bien cómo funcionan las organizaciones que trabajan sobre el terreno.';
$extraCss    = 'blog.css';

require $rootPath . '/includes/head.php';
require $rootPath . '/includes/navbar.php';
?>

<section class="entrada-hero">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 fade-in">
        <a href="<?= $rootPath ?>/pages/blog/index.php" class="entrada-volver">
          <i class="bi bi-arrow-left me-1"></i> Volver al blog
        </a>
        <div class="entrada-meta mt-4">
          <span class="blog-tag">Cooperación</span>
          <span class="blog-fecha"><i class="bi bi-calendar3 me-1"></i>Próximamente</span>
          <span class="blog-fecha"><i class="bi bi-clock me-1"></i>3 min de lectura</span>
        </div>
        <h1 class="entrada-titulo mt-3">
          Cooperación internacional para el desarrollo: qué es y cómo funciona en la práctica
        </h1>
        <div class="entrada-autor mt-4">
          <div class="entrada-autor-avatar">GE</div>
          <div><strong>Global Empowerment</strong><span>Próximamente</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="entrada-contenido section-padding fade-in">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <p class="entrada-intro">
          Muchas personas quieren colaborar con causas globales, pero no saben bien cómo
          funcionan las organizaciones que trabajan sobre el terreno. Lo explicaremos a continuación.
        </p>

        <p>
          La cooperación internacional para el desarrollo es el conjunto de acciones y recursos
          que países, instituciones y organizaciones de todo el mundo destinan a apoyar el progreso
          social y económico de las comunidades más vulnerables.
        </p>

        <h2>Qué distingue a una ONGD</h2>

        <p>
          Una Organización No Gubernamental de Desarrollo (ONGD) como Global Empowerment actúa
          con independencia de los gobiernos, aunque puede trabajar con ellos como financiadores
          o socios. Su característica esencial es que responde directamente a las necesidades de
          las comunidades con las que trabaja, sin intereses comerciales ni políticos.
        </p>

        <h2>El modelo de trabajo en terreno</h2>

        <p>
          Las ONGD más efectivas no operan unilateralmente: trabajan con contrapartes locales,
          organizaciones comunitarias y cooperativas que conocen el contexto y garantizan que las
          intervenciones sean culturalmente apropiadas y sostenibles. En Global Empowerment, este
          principio guía todos nuestros proyectos en el continente africano.
        </p>

        <h2>¿Cómo puedes colaborar desde España?</h2>

        <p>
          Puedes hacerlo mediante donaciones económicas, voluntariado, difusión de nuestra causa
          o a través de alianzas empresariales. Cada forma de apoyo tiene un impacto real y
          medible sobre el terreno.
        </p>

        <div class="entrada-cta-inline">
          <div>
            <strong>Colabora con nosotras</strong>
            <p>Descubre todas las formas de apoyar nuestra misión desde España.</p>
          </div>
          <a href="<?= $rootPath ?>/pages/contacto.php" class="btn btn-coral rounded-pill px-4">
            Ver cómo colaborar
          </a>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="entrada-compartir fade-in">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="entrada-compartir-inner">
          <span class="entrada-compartir-label">Comparte este artículo</span>
          <div class="entrada-compartir-btns">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode('https://www.theglobalempowerment.net') ?>" target="_blank" class="compartir-btn compartir-fb"><i class="bi bi-facebook"></i> Facebook</a>
            <a href="https://twitter.com/intent/tweet?text=<?= urlencode('Cooperación internacional para el desarrollo — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-x"><i class="bi bi-twitter-x"></i> X</a>
            <a href="https://wa.me/?text=<?= urlencode('Cooperación internacional para el desarrollo — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-wa"><i class="bi bi-whatsapp"></i> WhatsApp</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-padding text-center fade-in">
  <div class="container">
    <a href="<?= $rootPath ?>/pages/blog/index.php" class="btn btn-outline-ge btn-lg rounded-pill px-5">
      <i class="bi bi-arrow-left me-2"></i>Volver al blog
    </a>
  </div>
</section>

<?php
require $rootPath . '/includes/footer.php';
require $rootPath . '/includes/scripts.php';
?>
