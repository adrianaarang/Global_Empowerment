<?php
$rootPath    = '../..';
$currentPage = 'blog';
$pageTitle   = 'Global Empowerment arranca su primera campaña de captación de fondos en España';
$pageDesc    = 'Desde Málaga, un equipo comprometido con el empoderamiento femenino en África pone en marcha su programa de donaciones con beneficios fiscales.';
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
          <span class="blog-tag">Noticias</span>
          <span class="blog-fecha"><i class="bi bi-calendar3 me-1"></i>Próximamente</span>
          <span class="blog-fecha"><i class="bi bi-clock me-1"></i>2 min de lectura</span>
        </div>
        <h1 class="entrada-titulo mt-3">
          Global Empowerment arranca su primera campaña de captación de fondos en España
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
          Desde Málaga, un equipo comprometido con el empoderamiento femenino en África pone
          en marcha su programa de donaciones con beneficios fiscales para los colaboradores.
        </p>

        <p>
          Global Empowerment, ONGD española de cooperación al desarrollo con sede en Málaga,
          ha iniciado su primera campaña de captación de fondos dirigida a particulares y
          empresas en España. El objetivo es financiar programas de microcréditos y formación
          empresarial para mujeres en comunidades rurales del continente africano.
        </p>

        <h2>Un modelo de trabajo integral</h2>

        <p>
          A diferencia de la ayuda humanitaria de emergencia, los programas de Global Empowerment
          están diseñados para generar un impacto sostenible a largo plazo. Cada donación financia
          no solo microcréditos, sino también el acompañamiento formativo y el seguimiento que
          hacen que esos créditos se conviertan en negocios reales y estables.
        </p>

        <h2>Transparencia y rendición de cuentas</h2>

        <p>
          Como ONGD registrada en España, Global Empowerment cumple con todas las obligaciones
          de rendición de cuentas establecidas por la ley. Todos nuestros donantes reciben
          certificados de donación válidos para la deducción fiscal en la declaración de la renta.
        </p>

        <div class="entrada-cta-inline">
          <div>
            <strong>Únete a nuestra primera campaña</strong>
            <p>Apoya nuestros programas de microcréditos y formación en África.</p>
          </div>
          <a href="<?= $rootPath ?>/pages/donar.php" class="btn btn-coral rounded-pill px-4">
            <i class="bi bi-heart-fill me-2"></i>Donar ahora
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
            <a href="https://twitter.com/intent/tweet?text=<?= urlencode('Global Empowerment arranca su primera campaña — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-x"><i class="bi bi-twitter-x"></i> X</a>
            <a href="https://wa.me/?text=<?= urlencode('Global Empowerment arranca su primera campaña de captación de fondos') ?>" target="_blank" class="compartir-btn compartir-wa"><i class="bi bi-whatsapp"></i> WhatsApp</a>
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
