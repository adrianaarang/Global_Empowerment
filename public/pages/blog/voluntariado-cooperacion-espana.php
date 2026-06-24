<?php
$rootPath    = '../..';
$currentPage = 'blog';
$pageTitle   = '¿Por qué hacer voluntariado en cooperación internacional desde España?';
$pageDesc    = 'El voluntariado en una ONGD no requiere viajar a otro continente. Desde España se puede contribuir de forma muy significativa al desarrollo internacional.';
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
          <span class="blog-tag">Voluntariado</span>
          <span class="blog-fecha"><i class="bi bi-calendar3 me-1"></i>Próximamente</span>
          <span class="blog-fecha"><i class="bi bi-clock me-1"></i>3 min de lectura</span>
        </div>
        <h1 class="entrada-titulo mt-3">
          ¿Por qué hacer voluntariado en cooperación internacional desde España?
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
          El voluntariado en una ONGD no requiere viajar a otro continente. Desde España
          se puede contribuir de forma muy significativa al desarrollo internacional.
        </p>

        <p>
          Cuando pensamos en voluntariado en cooperación internacional, solemos imaginar a alguien
          viajando a un país empobrecido. Sin embargo, una parte esencial del trabajo de las ONGD
          ocurre aquí, en España: captación de fondos, comunicación, gestión administrativa,
          formación y sensibilización social.
        </p>

        <h2>Qué aporta el voluntariado local</h2>

        <p>
          El equipo de voluntarios y voluntarias en España es el que permite que la organización
          funcione, crezca y llegue a más personas. Sin su trabajo, los programas sobre el terreno
          en África no serían posibles. Desde la gestión de redes sociales hasta el apoyo en
          eventos de sensibilización, cada contribución tiene un impacto real.
        </p>

        <h2>Qué buscamos en Global Empowerment</h2>

        <p>
          No pedimos experiencia previa en cooperación internacional. Pedimos compromiso, ganas
          de aprender y tiempo. Si tienes conocimientos en comunicación, finanzas, diseño,
          educación o simplemente mucha energía y motivación, hay un espacio para ti en
          Global Empowerment.
        </p>

        <blockquote class="entrada-cita">
          Escríbenos y cuéntanos qué puedes aportar. Construiremos juntos el cambio que
          queremos ver.
        </blockquote>

        <div class="entrada-cta-inline">
          <div>
            <strong>¿Quieres ser voluntaria/o?</strong>
            <p>Escríbenos y te contamos cómo puedes contribuir desde donde estés.</p>
          </div>
          <a href="<?= $rootPath ?>/pages/contacto.php" class="btn btn-coral rounded-pill px-4">
            Contactar
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
            <a href="https://twitter.com/intent/tweet?text=<?= urlencode('Voluntariado en cooperación internacional desde España — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-x"><i class="bi bi-twitter-x"></i> X</a>
            <a href="https://wa.me/?text=<?= urlencode('¿Por qué hacer voluntariado en cooperación internacional desde España? — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-wa"><i class="bi bi-whatsapp"></i> WhatsApp</a>
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
