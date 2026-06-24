<?php
$rootPath    = '../..';
$currentPage = 'blog';
$pageTitle   = 'Blog';
$pageDesc    = 'Historias reales, datos y reflexiones sobre el empoderamiento femenino y la cooperación internacional.';
$extraCss    = 'blog.css';

require $rootPath . '/includes/head.php';
require $rootPath . '/includes/navbar.php';
?>

<!-- ===== HERO ===== -->
<section class="blog-hero">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-7 fade-in">
        <span class="section-label">Blog</span>
        <h1 class="section-title" style="font-size: clamp(2rem, 4vw, 3rem);">
          Historias que <em style="font-style:normal; color:var(--coral)">transforman</em>
        </h1>
        <p class="text-muted-ge mt-3" style="font-size:16px">
          Artículos educativos sobre igualdad de género, historias reales de transformación
          y total transparencia en la gestión de proyectos. Cada .
        </p>
      </div>
    </div>
  </div>
</section>

<!-- =====  ===== -->
<section class="section-padding">
  <div class="container">

    <!-- ENTRADA DESTACADA -->
    <div class="row mb-5 fade-in">
      <div class="col-12">
        <a href="<?= $rootPath ?>/pages/blog/brecha-genero-emprendimiento.php" class="blog-card-link">
          <article class="blog-card-featured">
            <div class="blog-card-featured-img">
              <img src="https://static.wixstatic.com/media/24e1db_b4f3bda22cc9431c82f031bca5894ccb~mv2.jpg/v1/fill/w_1000,h_662,al_c,q_85,usm_0.66_1.00_0.01/24e1db_b4f3bda22cc9431c82f031bca5894ccb~mv2.jpg"
                   alt="Brecha de género en el emprendimiento"
                   onerror="this.parentNode.style.background='var(--coral)'; this.style.display='none'">
            </div>
            <div class="blog-card-featured-body">
              <div class="blog-meta">
                <span class="blog-tag">Datos y cifras</span>
                <span class="blog-fecha">26 abr 2026 · 1 min de lectura</span>
              </div>
              <h2>Brecha de género en el emprendimiento: datos que necesitas conocer</h2>
              <p>Las mujeres representan Leer del 50% de la población mundial, pero siguen siendo
                significativamente menos en los registros de actividad empresarial formal. ¿Por qué?</p>
              <span class="blog-leer">Leer artículo <i class="bi bi-arrow-right ms-1"></i></span>
            </div>
          </article>
        </a>
      </div>
    </div>

    <!-- RESTO DE  -->
    <div class="row g-4">

      <div class="col-md-6 col-lg-4 fade-in">
        <a href="<?= $rootPath ?>/pages/blog/microcredito-mujer-emprendedora.php" class="blog-card-link">
          <article class="blog-card-sm h-100">
            <div class="blog-card-sm-img" style="background:var(--coral)">
              <i class="bi bi-cash-coin"></i>
            </div>
            <div class="blog-card-sm-body">
              <span class="blog-tag">Microcréditos</span>
              <h3>¿Qué es un microcrédito y cómo cambia la vida de una mujer emprendedora?</h3>
              <p>Una de las herramientas Leer poderosas para el desarrollo económico en comunidades rurales africanas.</p>
              <span class="blog-Leer nte-badge">Leer </span>
            </div>
          </article>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 fade-in">
        <a href="<?= $rootPath ?>/pages/blog/dependencia-autonomia-amina.php" class="blog-card-link">
          <article class="blog-card-sm h-100">
            <div class="blog-card-sm-img" style="background:var(--verde)">
              <i class="bi bi-person-heart"></i>
            </div>
            <div class="blog-card-sm-body">
              <span class="blog-tag">Historias de impacto</span>
              <h3>De la dependencia a la autonomía: el camino de una mujer rural</h3>
              <p>Lo que ocurre cuando una mujer accede a un microcrédito y formación empresarial por primera vez.</p>
              <span class="blog-Leer nte-badge">Leer · </span>
            </div>
          </article>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 fade-in">
        <a href="<?= $rootPath ?>/pages/blog/cooperacion-internacional.php" class="blog-card-link">
          <article class="blog-card-sm h-100">
            <div class="blog-card-sm-img" style="background:var(--terracota)">
              <i class="bi bi-globe-americas"></i>
            </div>
            <div class="blog-card-sm-body">
              <span class="blog-tag">Cooperación</span>
              <h3>Cooperación internacional para el desarrollo: qué es y cómo funciona</h3>
              <p>Muchas personas quieren colaborar con causas globales, pero no saben cómo funcionan las organizaciones sobre el terreno.</p>
              <span class="blog-Leer nte-badge">Leer · </span>
            </div>
          </article>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 fade-in">
        <a href="<?= $rootPath ?>/pages/blog/liderazgo-femenino-comunidades.php" class="blog-card-link">
          <article class="blog-card-sm h-100">
            <div class="blog-card-sm-img" style="background:var(--ebano)">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="blog-card-sm-body">
              <span class="blog-tag">Liderazgo</span>
              <h3>Por qué invertir en liderazgo femenino transforma comunidades enteras</h3>
              <p>La evidencia sobre el efecto multiplicador del liderazgo femenino es sólida y convincente.</p>
              <span class="blog-Leer nte-badge">Leer · </span>
            </div>
          </article>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 fade-in">
        <a href="<?= $rootPath ?>/pages/blog/campana-captacion-fondos.php" class="blog-card-link">
          <article class="blog-card-sm h-100">
            <div class="blog-card-sm-img" style="background:#7a5c8a">
              <i class="bi bi-megaphone-fill"></i>
            </div>
            <div class="blog-card-sm-body">
              <span class="blog-tag">Noticias</span>
              <h3>Global Empowerment arranca su primera campaña de captación de fondos</h3>
              <p>Desde Málaga, un equipo comprometido con el empoderamiento femenino pone en marcha su programa de donaciones.</p>
              <span class="blog-Leer nte-badge">Leer · </span>
            </div>
          </article>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 fade-in">
        <a href="<?= $rootPath ?>/pages/blog/voluntariado-cooperacion-espana.php" class="blog-card-link">
          <article class="blog-card-sm h-100">
            <div class="blog-card-sm-img" style="background:#4a8a6a">
              <i class="bi bi-hand-index-thumb-fill"></i>
            </div>
            <div class="blog-card-sm-body">
              <span class="blog-tag">Voluntariado</span>
              <h3>¿Por qué hacer voluntariado en cooperación internacional desde España?</h3>
              <p>No hace falta viajar a otro continente. Desde España se puede contribuir de forma muy significativa.</p>
              <span class="blog-Leer nte-badge">Leer · </span>
            </div>
          </article>
        </a>
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
        <h2 class="section-title mt-3">Recibe cada entrada<br>en tu correo</h2>
        <p class="text-muted-ge mt-2">
          Cada domingo de 19 a 21h enviamos nuestra newsletter con las últimas historias
          y actualizaciones de proyectos. Sin spam, solo impacto.
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

<!-- ===== CTA ===== -->
<section class="cta-final section-padding text-center fade-in">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <h2 class="cta-title">¿Lista para ser parte<br>del <em>cambio</em>?</h2>
        <p class="cta-subtitle">
          Colabora con nosotras para que Leer mujeres puedan construir su futuro en su propia tierra.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
          <a href="<?= $rootPath ?>/pages/donar.php" class="btn btn-coral btn-lg rounded-pill px-5">
            <i class="bi bi-heart-fill me-2"></i>Donar ahora
          </a>
          <a href="<?= $rootPath ?>/pages/hazte-socio.php" class="btn btn-outline-ge btn-lg rounded-pill px-5">
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
