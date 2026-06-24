<?php
$rootPath    = '../..';
$currentPage = 'blog';
$pageTitle   = '¿Qué es un microcrédito y cómo cambia la vida de una mujer emprendedora?';
$pageDesc    = 'El acceso al crédito es uno de los pilares del desarrollo económico. Descubre cómo los microcréditos transforman la vida de las mujeres rurales en África.';
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
          <span class="blog-tag">Microcréditos</span>
          <span class="blog-fecha"><i class="bi bi-calendar3 me-1"></i>Próximamente</span>
          <span class="blog-fecha"><i class="bi bi-clock me-1"></i>3 min de lectura</span>
        </div>
        <h1 class="entrada-titulo mt-3">
          ¿Qué es un microcrédito y cómo cambia la vida de una mujer emprendedora?
        </h1>
        <div class="entrada-autor mt-4">
          <div class="entrada-autor-avatar">GE</div>
          <div>
            <strong>Global Empowerment</strong>
            <span>Próximamente</span>
          </div>
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
          Una de las herramientas más poderosas para el desarrollo económico en comunidades
          rurales africanas es también una de las menos conocidas en España.
        </p>

        <p>
          El acceso al crédito es uno de los pilares fundamentales del desarrollo económico.
          Sin embargo, en muchas comunidades rurales de África, las instituciones financieras
          tradicionales no ofrecen servicios adaptados a las necesidades reales de las personas
          con menos recursos, especialmente las mujeres.
        </p>

        <h2>¿Qué es exactamente un microcrédito?</h2>

        <p>
          Un microcrédito es un préstamo de pequeña cuantía, generalmente de entre 50 y 500 euros,
          destinado a personas que no tienen acceso al sistema bancario convencional. Su objetivo es
          financiar pequeños negocios o actividades productivas que permitan a quienes los reciben
          generar ingresos propios y mejorar su situación económica.
        </p>

        <h2>Por qué las mujeres son las principales beneficiarias</h2>

        <p>
          Diversos estudios del Banco Mundial y otras organizaciones de desarrollo muestran que
          cuando las mujeres controlan sus propios recursos económicos, el impacto positivo se
          extiende a toda la familia y la comunidad: mejora la educación de los hijos, la
          alimentación y la salud. Por eso, en Global Empowerment focalizamos nuestros programas
          de microcréditos en mujeres emprendedoras en áreas rurales del continente africano.
        </p>

        <h2>Cómo funciona el programa de Global Empowerment</h2>

        <p>
          Nuestro modelo combina el acceso al crédito con formación empresarial y acompañamiento
          continuo. No se trata solo de dar dinero: se trata de proporcionar las herramientas
          necesarias para que ese capital genere un impacto sostenible a largo plazo.
        </p>

        <div class="entrada-cta-inline">
          <div>
            <strong>¿Quieres apoyar este programa?</strong>
            <p>Tu donación financia directamente microcréditos para mujeres emprendedoras en África.</p>
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
            <a href="https://twitter.com/intent/tweet?text=<?= urlencode('¿Qué es un microcrédito y cómo cambia la vida de una mujer emprendedora? — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-x"><i class="bi bi-twitter-x"></i> X</a>
            <a href="https://wa.me/?text=<?= urlencode('¿Qué es un microcrédito y cómo cambia la vida de una mujer emprendedora? — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-wa"><i class="bi bi-whatsapp"></i> WhatsApp</a>
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
