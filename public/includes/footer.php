<?php $rootPath = $rootPath ?? '.'; ?>
<footer class="ge-footer">
  <div class="container">
    <div class="row g-4 pb-4">

      <div class="col-lg-4 col-md-6">
        <h4 class="footer-brand">  <img src="<?= $rootPath ?>/assets/images/logos/Logo Global Empowerment-02 (1).png"
       alt="The Global Empowerment" height="56"
       style="max-width:56px; object-fit:contain;">
        The Global Empowerment</h4>
        <p class="footer-text">
          ONG de cooperación internacional comprometida con la justicia social
          y la dignidad de todas las personas. Empoderamos a mujeres y niñas
          como motor principal de cambio global.
        </p>
      </div>

      <div class="col-lg-2 col-md-3 col-6">
        <h5 class="footer-heading">Organización</h5>
        <ul class="footer-links">
          <li><a href="<?= $rootPath ?>/index.php">Inicio</a></li>
          <li><a href="<?= $rootPath ?>/pages/quienes-somos.php">Sobre Nosotras</a></li>
          <li><a href="<?= $rootPath ?>/pages/proyectos.php">Proyectos</a></li>
          <li><a href="<?= $rootPath ?>/pages/blog/index.php">Blog</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 col-6">
        <h5 class="footer-heading">Actúa</h5>
        <ul class="footer-links">
          <li><a href="<?= $rootPath ?>/pages/contacto.php">Hazte socio/a</a></li>
          <li><a href="<?= $rootPath ?>/pages/donar.php">Donar</a></li>
          <li><a href="<?= $rootPath ?>/pages/tienda/index.php">Tienda solidaria</a></li>
          <li><a href="<?= $rootPath ?>/pages/contacto.php">Colaborar</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 col-6">
        <h5 class="footer-heading">Síguenos</h5>
        <ul class="footer-links">
          <li><a href="#"><i class="bi bi-instagram me-2"></i>Instagram</a></li>
          <li><a href="#"><i class="bi bi-tiktok me-2"></i>TikTok</a></li>
          <li><a href="#"><i class="bi bi-linkedin me-2"></i>LinkedIn</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 col-6">
        <h5 class="footer-heading">Legal</h5>
        <ul class="footer-links">
          <li><a href="#">Aviso legal</a></li>
          <li><a href="#">Política de privacidad</a></li>
          <li><a href="#">LOPD</a></li>
          <li><a href="#">Cookies</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <p>© <?= date('Y') ?> The Global Empowerment · Todos los derechos reservados</p>
    </div>
  </div>
</footer>
