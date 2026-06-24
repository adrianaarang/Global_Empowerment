<?php
$rootPath    = '../..';
$currentPage = 'blog';
$pageTitle   = 'Brecha de género en el emprendimiento: datos que necesitas conocer';
$pageDesc    = 'Las mujeres representan más del 50% de la población mundial, pero siguen siendo significativamente menos en los registros de actividad empresarial formal.';
$extraCss    = 'blog.css';

require $rootPath . '/includes/head.php';
require $rootPath . '/includes/navbar.php';
?>

<!-- ===== HERO ENTRADA ===== -->
<section class="entrada-hero">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 fade-in">

        <a href="<?= $rootPath ?>/pages/blog/index.php" class="entrada-volver">
          <i class="bi bi-arrow-left me-1"></i> Volver al blog
        </a>

        <div class="entrada-meta mt-4">
          <span class="blog-tag">Datos y cifras</span>
          <span class="blog-fecha">
            <i class="bi bi-calendar3 me-1"></i>26 abr 2026
          </span>
          <span class="blog-fecha">
            <i class="bi bi-clock me-1"></i>1 min de lectura
          </span>
        </div>

        <h1 class="entrada-titulo mt-3">
          Brecha de género en el emprendimiento: datos que necesitas conocer
        </h1>

        <div class="entrada-autor mt-4">
          <div class="entrada-autor-avatar">GE</div>
          <div>
            <strong>Global Empowerment</strong>
            <span>26 de abril de 2026</span>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ===== IMAGEN DESTACADA ===== -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="entrada-img-wrap fade-in">
        <img src="https://static.wixstatic.com/media/24e1db_b4f3bda22cc9431c82f031bca5894ccb~mv2.jpg/v1/fill/w_1000,h_662,al_c,q_85,usm_0.66_1.00_0.01/24e1db_b4f3bda22cc9431c82f031bca5894ccb~mv2.jpg"
             alt="Brecha de género en el emprendimiento"
             onerror="this.parentNode.style.background='var(--arena)'; this.style.display='none'">
      </div>
    </div>
  </div>
</div>

<!-- ===== CONTENIDO ===== -->
<section class="entrada-contenido section-padding fade-in">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <p class="entrada-intro">
          Las mujeres representan más del 50% de la población mundial, pero siguen siendo
          significativamente menos en los registros de actividad empresarial formal. ¿Por qué?
        </p>

        <p>
          La igualdad de género en el ámbito económico no es solo una cuestión de justicia social:
          es también un imperativo de eficiencia económica. Cuando la mitad de la población no puede
          desarrollar su potencial emprendedor, toda la sociedad pierde.
        </p>

        <h2>La situación en cifras</h2>

        <ul class="entrada-lista">
          <li>Las mujeres realizan el <strong>66% del trabajo mundial</strong>, pero generan solo el
            <strong>10% de los ingresos</strong> (OIT).</li>
          <li>En el África subsahariana, las mujeres constituyen más del <strong>70% de los agricultores
            de subsistencia</strong>, pero solo acceden al <strong>10% del crédito agrícola</strong>.</li>
        </ul>

        <blockquote class="entrada-cita">
          Por cada euro invertido en educación y empoderamiento de niñas, el retorno social estimado
          es de entre 5 y 10 euros.
        </blockquote>

        <h2>Las barreras estructurales</h2>

        <p>
          El acceso desigual no es casual. Responde a barreras estructurales profundas: normas
          culturales que limitan la movilidad femenina, marcos legales que dificultan la titularidad
          de tierras, y un sistema financiero que no ha diseñado productos adaptados a las necesidades
          de las mujeres.
        </p>

        <h2>¿Qué puede hacer la cooperación internacional?</h2>

        <p>
          Las ONGD especializadas en emprendimiento femenino actúan en varios frentes simultáneamente:
          facilitan acceso al crédito, ofrecen formación empresarial adaptada culturalmente y trabajan
          con las comunidades para transformar las normas que perpetúan la desigualdad. Este es el
          enfoque de Global Empowerment en África.
        </p>

        <!-- CTA dentro del artículo -->
        <div class="entrada-cta-inline">
          <div>
            <strong>¿Quieres formar parte del cambio?</strong>
            <p>Tu apoyo permite que más mujeres accedan a formación y recursos para emprender.</p>
          </div>
          <a href="<?= $rootPath ?>/pages/donar.php" class="btn btn-coral rounded-pill px-4">
            <i class="bi bi-heart-fill me-2"></i>Donar ahora
          </a>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ===== COMPARTIR ===== -->
<section class="entrada-compartir fade-in">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="entrada-compartir-inner">
          <span class="entrada-compartir-label">Comparte este artículo</span>
          <div class="entrada-compartir-btns">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode('https://www.theglobalempowerment.net/post/brecha-de-g%C3%A9nero-en-el-emprendimiento-datos-que-necesitas-conocer') ?>"
               target="_blank" class="compartir-btn compartir-fb">
              <i class="bi bi-facebook"></i> Facebook
            </a>
            <a href="https://twitter.com/intent/tweet?url=<?= urlencode('https://www.theglobalempowerment.net/post/brecha-de-g%C3%A9nero-en-el-emprendimiento-datos-que-necesitas-conocer') ?>&text=Brecha+de+género+en+el+emprendimiento"
               target="_blank" class="compartir-btn compartir-x">
              <i class="bi bi-twitter-x"></i> X
            </a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode('https://www.theglobalempowerment.net/post/brecha-de-g%C3%A9nero-en-el-emprendimiento-datos-que-necesitas-conocer') ?>"
               target="_blank" class="compartir-btn compartir-li">
              <i class="bi bi-linkedin"></i> LinkedIn
            </a>
            <a href="https://wa.me/?text=<?= urlencode('Brecha de género en el emprendimiento: datos que necesitas conocer — The Global Empowerment') ?>"
               target="_blank" class="compartir-btn compartir-wa">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== NEWSLETTER ===== -->
<section class="blog-newsletter section-padding fade-in">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <i class="bi bi-envelope-heart-fill blog-newsletter-icon"></i>
        <h2 class="section-title mt-3">¿Te ha gustado este artículo?</h2>
        <p class="text-muted-ge mt-2">
          Suscríbete y recibe cada entrada en tu correo cada domingo.
          Sin spam, solo impacto.
        </p>
        <form class="blog-newsletter-form mt-4" novalidate>
          <input type="email" class="form-input-ge" placeholder="tu@email.com">
          <button type="submit" class="btn btn-coral rounded-pill px-4">
            Suscribirme
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ===== VOLVER AL BLOG ===== -->
<section class="section-padding text-center fade-in">
  <div class="container">
    <a href="<?= $rootPath ?>/pages/blog/index.php"
       class="btn btn-outline-ge btn-lg rounded-pill px-5">
      <i class="bi bi-arrow-left me-2"></i>Volver al blog
    </a>
  </div>
</section>

<?php
require $rootPath . '/includes/footer.php';
require $rootPath . '/includes/scripts.php';
?>
