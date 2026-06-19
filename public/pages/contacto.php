<?php
$rootPath    = '..';
$currentPage = 'contacto';
$pageTitle   = 'Contacto';
$pageDesc    = 'Ponte en contacto con The Global Empowerment.';
$extraCss    = 'contacto.css';

require $rootPath . '/includes/head.php';
require $rootPath . '/includes/navbar.php';
?>

<!-- ===== HERO ===== -->
<section class="contacto-hero">
  <div class="container">
    <div class="row align-items-center g-5">

      <div class="col-lg-6 fade-in">
        <span class="section-label">Escríbenos</span>
        <h1 class="section-title" style="font-size: clamp(2rem, 4vw, 3rem);">
          ¿Tienes alguna <em style="font-style:normal; color:var(--coral)">pregunta</em>?
        </h1>
        <p class="text-muted-ge mt-3" style="font-size:17px">
          Estamos aquí para resolver tus dudas sobre nuestros proyectos, voluntariado
          o colaboraciones. Escríbenos y te responderemos lo antes posible.
        </p>

        <div class="contacto-email-box mt-4">
          <i class="bi bi-envelope-fill"></i>
          <div>
            <p class="contacto-email-label">Email</p>
            <a href="mailto:empowermentfoundationg@gmail.com" class="contacto-email-link">
              empowermentfoundationg@gmail.com
            </a>
          </div>
        </div>

        <div class="contacto-rrss mt-4">
          <a href="http://www.facebook.com" target="_blank" class="rrss-btn" aria-label="Facebook">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="http://www.instagram.com" target="_blank" class="rrss-btn" aria-label="Instagram">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="http://www.youtube.com" target="_blank" class="rrss-btn" aria-label="YouTube">
            <i class="bi bi-youtube"></i>
          </a>
          <a href="http://www.x.com" target="_blank" class="rrss-btn" aria-label="X / Twitter">
            <i class="bi bi-twitter-x"></i>
          </a>
          <a href="http://www.linkedin.com" target="_blank" class="rrss-btn" aria-label="LinkedIn">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="http://www.tiktok.com" target="_blank" class="rrss-btn" aria-label="TikTok">
            <i class="bi bi-tiktok"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-6 fade-in fade-in-delay">
        <div class="contacto-form-card">
          <h2 class="contacto-form-title">Envíanos un mensaje</h2>
          <p class="contacto-form-subtitle">Te responderemos tan pronto como nos sea posible.</p>

          <form action="#" method="POST" class="contacto-form" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="nombre" class="form-label-ge">Nombre *</label>
                <input type="text" id="nombre" name="nombre" class="form-input-ge"
                       placeholder="Tu nombre" required>
              </div>
              <div class="col-sm-6">
                <label for="apellido" class="form-label-ge">Apellido *</label>
                <input type="text" id="apellido" name="apellido" class="form-input-ge"
                       placeholder="Tu apellido" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label-ge">Email *</label>
                <input type="email" id="email" name="email" class="form-input-ge"
                       placeholder="tu@email.com" required>
              </div>
              <div class="col-12">
                <label for="asunto" class="form-label-ge">Asunto *</label>
                <input type="text" id="asunto" name="asunto" class="form-input-ge"
                       placeholder="¿En qué podemos ayudarte?" required>
              </div>
              <div class="col-12">
                <label for="mensaje" class="form-label-ge">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" class="form-input-ge form-textarea-ge"
                          placeholder="Cuéntanos más..." required></textarea>
              </div>
            </div>

            <button type="submit" class="btn btn-coral w-100 rounded-pill mt-4" style="font-size:16px">
              <i class="bi bi-send-fill me-2"></i>Enviar mensaje
            </button>

            <p class="form-aviso mt-3">
              <i class="bi bi-lock-fill me-1"></i>
              Tus datos se tratarán conforme a nuestra
              <a href="#">política de privacidad</a> y la LOPD.
            </p>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== FORMAS DE COLABORAR ===== -->
<section class="section-padding fade-in" style="background-color:#ede5cd">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Colabora</span>
      <h2 class="section-title">Otras formas de ayudar</h2>
    </div>
    <div class="row g-4 justify-content-center">

      <div class="col-md-4">
        <div class="colabora-card h-100">
          <div class="colabora-icon" style="background:rgba(255,136,91,0.12); color:var(--coral)">
            <i class="bi bi-heart-fill"></i>
          </div>
          <h3>Hazte socio/a</h3>
          <p>Apoya con una aportación mensual y conviértete en parte esencial de nuestra misión.</p>
          <a href="<?= $rootPath ?>/pages/hazte-socio.php" class="btn btn-coral rounded-pill px-4 mt-auto">
            Unirme ahora
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="colabora-card h-100">
          <div class="colabora-icon" style="background:rgba(95,113,97,0.12); color:var(--verde)">
            <i class="bi bi-hand-index-thumb"></i>
          </div>
          <h3>Voluntariado</h3>
          <p>Aporta tu tiempo y habilidades en proyectos de empoderamiento, en el campo o de forma remota.</p>
          <a href="mailto:empowermentfoundationg@gmail.com" class="btn btn-outline-ge rounded-pill px-4 mt-auto">
            Escribirnos
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="colabora-card h-100">
          <div class="colabora-icon" style="background:rgba(166,75,42,0.1); color:var(--terracota)">
            <i class="bi bi-building"></i>
          </div>
          <h3>Alianzas empresariales</h3>
          <p>Colabora con nosotras como empresa o institución para crear soluciones escalables y de largo plazo.</p>
          <a href="mailto:empowermentfoundationg@gmail.com" class="btn btn-outline-ge rounded-pill px-4 mt-auto">
            Proponer alianza
          </a>
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
        <h2 class="cta-title">Juntas somos más <em>fuertes</em></h2>
        <p class="cta-subtitle">
          Cada acción, por pequeña que sea, contribuye a construir un futuro
          más equitativo y lleno de oportunidades.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
          <a href="<?= $rootPath ?>/pages/hazte-socio.php" class="btn btn-coral btn-lg rounded-pill px-5">
            <i class="bi bi-heart-fill me-2"></i>Hazte socio/a
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