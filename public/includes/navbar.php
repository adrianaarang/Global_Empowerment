<?php
$rootPath    = $rootPath ?? '.';
$currentPage = $currentPage ?? '';
function navActive(string $page, string $current): string {
    return $page === $current ? 'active aria-current="page"' : '';
}
?>
<nav class="navbar navbar-expand-lg navbar-ge sticky-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="<?= $rootPath ?>/index.php">
      <img src="<?= $rootPath ?>/assets/images/logos/Logo Global Empowerment-02 (1).png"
           alt="The Global Empowerment" height="56"
           style="max-width:56px; object-fit:contain;">
      <span class="navbar-brand-text">THE GLOBAL<br><strong>EMPOWERMENT</strong></span>
    </a>
    <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navMenu"
            aria-controls="navMenu" aria-expanded="false" aria-label="Abrir menú">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
        <li class="nav-item">
          <a class="nav-link <?= navActive('home', $currentPage) ?>"
             href="<?= $rootPath ?>/index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= navActive('quienes-somos', $currentPage) ?>"
             href="<?= $rootPath ?>/pages/quienes-somos.php">Sobre Nosotras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= navActive('proyectos', $currentPage) ?>"
             href="<?= $rootPath ?>/pages/proyectos.php">Proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= navActive('blog', $currentPage) ?>"
             href="<?= $rootPath ?>/pages/blog/index.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= navActive('tienda', $currentPage) ?>"
             href="<?= $rootPath ?>/pages/tienda/index.php">Tienda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= navActive('contacto', $currentPage) ?>"
             href="<?= $rootPath ?>/pages/contacto.php">Contacto</a>
        </li>
        <li class="nav-item ms-lg-2">
          <a class="btn btn-outline-ge rounded-pill px-4"
             href="<?= $rootPath ?>/pages/donar.php">
            <i class="bi bi-heart me-1"></i>Donar
          </a>
        </li>
        <li class="nav-item ms-lg-1">
          <a class="btn btn-coral rounded-pill px-4"
             href="<?= $rootPath ?>/pages/hazte-socio.php">
            Hazte socio/a
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>