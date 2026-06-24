<?php
$rootPath    = '../..';
$currentPage = 'blog';
$pageTitle   = 'Por qué invertir en liderazgo femenino transforma comunidades enteras';
$pageDesc    = 'La evidencia sobre el efecto multiplicador del liderazgo femenino en comunidades rurales es sólida y convincente.';
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
          <span class="blog-tag">Liderazgo</span>
          <span class="blog-fecha"><i class="bi bi-calendar3 me-1"></i>Próximamente</span>
          <span class="blog-fecha"><i class="bi bi-clock me-1"></i>3 min de lectura</span>
        </div>
        <h1 class="entrada-titulo mt-3">
          Por qué invertir en liderazgo femenino transforma comunidades enteras
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
          Cuando una mujer lidera, los beneficios no se quedan en ella. La evidencia sobre el
          efecto multiplicador del liderazgo femenino en comunidades rurales es sólida y convincente.
        </p>

        <p>
          El liderazgo femenino no es una cuestión de cuotas ni de corrección política. Es, ante
          todo, una cuestión de efectividad. Décadas de investigación en desarrollo internacional
          muestran que las mujeres en posiciones de liderazgo comunitario priorizan de forma
          sistemática la educación, la salud y la cohesión social.
        </p>

        <h2>El efecto multiplicador</h2>

        <p>
          Cuando una mujer accede a recursos, educación y posiciones de decisión, los beneficios
          se extienden a su entorno inmediato: los hijos de madres con ingresos propios tienen
          tasas de escolarización hasta un <strong>40% superiores</strong>, y la mortalidad
          infantil en zonas donde las mujeres participan en decisiones comunitarias es
          significativamente menor.
        </p>

        <h2>Formación como palanca de cambio</h2>

        <p>
          En Global Empowerment entendemos la formación empresarial como mucho más que
          contabilidad y gestión. Nuestros programas de capacitación incluyen habilidades de
          comunicación, negociación y liderazgo, porque una empresaria que puede defender sus
          intereses es también una ciudadana que puede defender los de su comunidad.
        </p>

        <h2>Alianzas para ampliar el impacto</h2>

        <p>
          El trabajo de una sola organización tiene límites. Por eso, parte esencial de nuestra
          misión es construir alianzas sólidas con organizaciones locales, gobiernos y empresas
          que compartan nuestro compromiso con el desarrollo sostenible y la equidad de género en África.
        </p>

        <div class="entrada-cta-inline">
          <div>
            <strong>Apoya el liderazgo femenino</strong>
            <p>Cada aportación financia formación en liderazgo y gestión empresarial.</p>
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
            <a href="https://twitter.com/intent/tweet?text=<?= urlencode('Por qué invertir en liderazgo femenino transforma comunidades — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-x"><i class="bi bi-twitter-x"></i> X</a>
            <a href="https://wa.me/?text=<?= urlencode('Por qué invertir en liderazgo femenino — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-wa"><i class="bi bi-whatsapp"></i> WhatsApp</a>
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
