<?php
$rootPath    = '../..';
$currentPage = 'blog';
$pageTitle   = 'De la dependencia a la autonomía: el camino de una mujer rural a través del emprendimiento';
$pageDesc    = 'Un relato representativo de lo que ocurre cuando una mujer en una comunidad rural africana accede a un microcrédito y a formación empresarial por primera vez.';
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
          <span class="blog-tag">Historias de impacto</span>
          <span class="blog-fecha"><i class="bi bi-calendar3 me-1"></i>Próximamente</span>
          <span class="blog-fecha"><i class="bi bi-clock me-1"></i>4 min de lectura</span>
        </div>
        <h1 class="entrada-titulo mt-3">
          De la dependencia a la autonomía: el camino de una mujer rural a través del emprendimiento
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
          Un relato representativo de lo que ocurre cuando una mujer en una comunidad rural
          africana accede a un microcrédito y a formación empresarial por primera vez.
        </p>

        <p>
          Imaginemos a Amina, 34 años, madre de tres hijos, que vive en una comunidad rural
          del África occidental. Como muchas mujeres de su entorno, depende económicamente
          de su marido y no tiene acceso a recursos propios. Una sequía o una enfermedad
          pueden hundir a toda la familia en la pobreza extrema.
        </p>

        <h2>El punto de inflexión</h2>

        <p>
          Cuando accede a un microcrédito de 200 euros a través de un programa de cooperación,
          Amina no recibe solo dinero. Recibe también tres meses de formación en gestión básica
          de negocios, acceso a una red de mujeres emprendedoras de su comunidad y seguimiento
          mensual de una asesora local.
        </p>

        <h2>El impacto real, medido</h2>

        <p>
          Con ese capital inicial, Amina monta un pequeño puesto de venta de productos agrícolas.
          En seis meses, ha devuelto el microcrédito y generado un excedente que le permite
          ahorrar. Pero más allá del dinero, algo más ha cambiado: participa en las decisiones
          familiares, sus hijos van a la escuela de forma regular, y otras tres mujeres de su
          comunidad han pedido información sobre el programa.
        </p>

        <blockquote class="entrada-cita">
          El empoderamiento económico no es un fin en sí mismo: es la puerta de entrada
          a todos los demás derechos.
        </blockquote>

        <h2>Por qué esto importa</h2>

        <p>
          Cuando una mujer tiene autonomía económica, puede tomar decisiones sobre su salud,
          su educación y la de sus hijos, y su participación en la vida comunitaria. Esto es
          lo que impulsa el trabajo de Global Empowerment cada día.
        </p>

        <div class="entrada-cta-inline">
          <div>
            <strong>Haz posible más historias como la de Amina</strong>
            <p>Tu donación financia microcréditos y formación para mujeres emprendedoras.</p>
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
            <a href="https://twitter.com/intent/tweet?text=<?= urlencode('De la dependencia a la autonomía — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-x"><i class="bi bi-twitter-x"></i> X</a>
            <a href="https://wa.me/?text=<?= urlencode('De la dependencia a la autonomía — Global Empowerment') ?>" target="_blank" class="compartir-btn compartir-wa"><i class="bi bi-whatsapp"></i> WhatsApp</a>
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
