<?php
$rootPath    = '..';
$currentPage = 'hazte-socio';
$pageTitle   = 'Hazte socio/a';
$pageDesc    = 'Únete a The Global Empowerment y conviértete en parte fundamental del empoderamiento de comunidades vulnerables.';
$extraCss    = 'hazte-socio.css';
$extraJs     = 'hazte-socio.js';

require $rootPath . '/includes/head.php';
require $rootPath . '/includes/navbar.php';
?>

<!-- ===== HERO ===== -->
<section class="contacto-hero">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center fade-in">
        <span class="section-label">Únete</span>
        <h1 class="section-title" style="font-size: clamp(2rem, 4vw, 3rem);">
          Hazte <em style="font-style:normal; color:var(--coral)">socio/a</em>
        </h1>
        <p class="text-muted-ge mt-3" style="font-size:16px; max-width:600px; margin:0 auto">
          Tu compromiso mensual nos permite planificar a largo plazo y generar un impacto
          sostenible. Al hacerte socio o socia, te conviertes en una pieza fundamental para
          el empoderamiento de comunidades vulnerables.
        </p>
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-lg-7">
        <div class="socio-selector-card fade-in">
          <p class="socio-selector-label">Elige tu aportación mensual</p>
          <div class="socio-cantidades" id="socio-cantidades">
            <button type="button" class="socio-cantidad" data-valor="10">10 €</button>
            <button type="button" class="socio-cantidad" data-valor="20">20 €</button>
            <button type="button" class="socio-cantidad selected" data-valor="30">30 €</button>
            <button type="button" class="socio-cantidad" data-valor="40">40 €</button>
            <button type="button" class="socio-cantidad" data-valor="50">50 €</button>
          </div>
          <div class="socio-otra mt-3 mx-auto" style="max-width:200px">
            <label for="otraCantidad" class="form-label-ge">Otra cantidad (€)</label>
            <input type="number" id="otraCantidad" class="form-input-ge"
                   placeholder="Ej: 15" min="1">
          </div>
  
          <div class="text-center mt-4">
            <button type="button" class="btn btn-coral btn-lg rounded-pill px-5"
                    id="btnQuieroSocio" style="font-size:16px; height:54px">
              <i class="bi bi-heart-fill me-2"></i>Quiero ser socio/a
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-lg-8">
        <div class="row g-3 text-center fade-in">
          <div class="col-sm-4">
            <div class="socio-beneficio-card">
              <i class="bi bi-globe-americas"></i>
              <p>Impacto directo en comunidades rurales</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="socio-beneficio-card">
              <i class="bi bi-file-earmark-text"></i>
              <p>Informes de transparencia periódicos</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="socio-beneficio-card">
              <i class="bi bi-x-circle"></i>
              <p>Cancela cuando quieras, sin compromiso</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="faq-section section-padding fade-in">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Resolvemos tus dudas</span>
      <h2 class="section-title">Preguntas frecuentes</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion faq-accordion" id="faqAccordion">

          <div class="faq-item">
            <button class="faq-btn" data-bs-toggle="collapse"
                    data-bs-target="#faq1" aria-expanded="true">
              <span class="faq-num">01</span>
              <span>¿Cuál es la misión principal de Global Empowerment?</span>
              <i class="bi bi-chevron-down faq-chevron"></i>
            </button>
            <div id="faq1" class="collapse show" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                <p>Nuestra misión es empoderar a individuos y comunidades en situación de
                  vulnerabilidad mediante programas integrales de desarrollo personal, liderazgo
                  estratégico y proyectos sostenibles que promuevan la autonomía económica y social.</p>
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-btn collapsed" data-bs-toggle="collapse"
                    data-bs-target="#faq2" aria-expanded="false">
              <span class="faq-num">02</span>
              <span>¿Cómo se seleccionan los participantes para los programas?</span>
              <i class="bi bi-chevron-down faq-chevron"></i>
            </button>
            <div id="faq2" class="collapse" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                <p>Contamos con un proceso de evaluación transparente que analiza el contexto
                  socioeconómico, el potencial de liderazgo comunitario y el compromiso genuino
                  del candidato con su propio proceso de transformación y servicio social.</p>
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-btn collapsed" data-bs-toggle="collapse"
                    data-bs-target="#faq3" aria-expanded="false">
              <span class="faq-num">03</span>
              <span>¿Es posible colaborar como voluntario/a de forma remota?</span>
              <i class="bi bi-chevron-down faq-chevron"></i>
            </button>
            <div id="faq3" class="collapse" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                <p>Sí, disponemos de múltiples opciones de impacto digital en áreas de mentoría,
                  traducción, soporte técnico y gestión de proyectos, permitiendo que profesionales
                  de todo el mundo colaboren con nosotras de forma efectiva.</p>
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-btn collapsed" data-bs-toggle="collapse"
                    data-bs-target="#faq4" aria-expanded="false">
              <span class="faq-num">04</span>
              <span>¿Cuáles son las principales fuentes de financiamiento?</span>
              <i class="bi bi-chevron-down faq-chevron"></i>
            </button>
            <div id="faq4" class="collapse" data-bs-parent="#faqAccordion">
              <div class="faq-body">
                <p>Global Empowerment se financia a través de donaciones individuales particulares,
                  subvenciones de fundaciones internacionales y patrocinios corporativos que comparten
                  nuestra visión de un mundo más equitativo y empoderado.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== MODAL ===== -->
<div class="modal fade" id="modalSocio" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content socio-modal-content">

      <div class="socio-modal-header">
        <div>
          <h5 class="socio-modal-title">Completa tus datos</h5>
          <p class="socio-modal-subtitle">
            Quiero aportar <strong id="modalCantidadTexto">30 €</strong> mensualmente
          </p>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <div class="modal-body socio-modal-body">

        <!-- PASO 1 -->
        <div id="paso1">
          <div class="socio-paso-label">
            <span class="socio-paso-num">1</span> Datos personales
          </div>
          <div class="row g-3 mt-1">
            <div class="col-sm-6">
              <label class="form-label-ge">Nombre *</label>
              <input type="text" id="p1_nombre" class="form-input-ge" placeholder="Tu nombre">
            </div>
            <div class="col-sm-6">
              <label class="form-label-ge">Apellido *</label>
              <input type="text" id="p1_apellido" class="form-input-ge" placeholder="Tu apellido">
            </div>
            <div class="col-sm-6">
              <label class="form-label-ge">Email *</label>
              <input type="email" id="p1_email" class="form-input-ge" placeholder="tu@email.com">
            </div>
            <div class="col-sm-6">
              <label class="form-label-ge">Teléfono</label>
              <input type="tel" id="p1_telefono" class="form-input-ge" placeholder="+34 000 000 000">
            </div>
            <div class="col-12">
              <label class="form-label-ge">Dirección</label>
              <input type="text" id="p1_direccion" class="form-input-ge" placeholder="Calle, número, ciudad">
            </div>
            <div class="col-sm-6">
              <label class="form-label-ge">DNI / NIE *</label>
              <input type="text" id="p1_dni" class="form-input-ge" placeholder="00000000X">
            </div>
          </div>

          <div class="socio-desgrava mt-4">
            <i class="bi bi-info-circle-fill"></i>
          
          </div>

          <div class="mt-4 d-flex flex-column gap-3">
            <label class="socio-check">
              <input type="checkbox" id="p1_privacidad">
              <span>He leído y acepto la <a href="#">política de privacidad</a> *</span>
            </label>
          </div>

          <button type="button" class="btn btn-coral w-100 rounded-pill mt-4"
                  id="btnPaso2" style="font-size:16px; height:52px">
            <i class="bi bi-heart-fill me-2"></i>Quiero ser socio/a
          </button>

          <p class="form-aviso mt-3">
            <i class="bi bi-lock-fill me-1"></i>
            Tus datos se tratarán conforme a nuestra <a href="#">política de privacidad</a> y la LOPD.
          </p>
        </div>

        <!-- PASO 2 -->
        <div id="paso2" style="display:none">
          <button type="button" class="socio-volver" id="btnVolver">
            <i class="bi bi-arrow-left me-1"></i> Volver
          </button>

          <div class="socio-paso-label mt-3">
            <span class="socio-paso-num">2</span> Domiciliación bancaria
          </div>
          <p class="text-muted-ge mt-2" style="font-size:14px">
            Introduce tu IBAN para domiciliar el cobro mensual de
            <strong id="paso2Cantidad">30 €</strong>.
          </p>

          <form id="formFinal" action="#" method="POST" novalidate>
            <input type="hidden" name="donacion"  id="finalDonacion">
            <input type="hidden" name="nombre"    id="finalNombre">
            <input type="hidden" name="apellido"  id="finalApellido">
            <input type="hidden" name="email"     id="finalEmail">
            <input type="hidden" name="telefono"  id="finalTelefono">
            <input type="hidden" name="direccion" id="finalDireccion">
            <input type="hidden" name="dni"       id="finalDni">

            <div class="row g-3 mt-1">
              <div class="col-12">
                <label class="form-label-ge">Titular de la cuenta *</label>
                <input type="text" id="titularInput" name="titular" class="form-input-ge"
                       placeholder="Nombre y apellidos del titular">
              </div>
              <div class="col-12">
                <label class="form-label-ge">IBAN *</label>
                <input type="text" id="ibanInput" name="iban" class="form-input-ge"
                       placeholder="ES00 0000 0000 0000 0000 0000" maxlength="29">
                <small style="font-size:12px; color:#a09092; margin-top:4px; display:block">
                  Formato: ES seguido de 22 dígitos
                </small>
              </div>
              <div class="col-sm-6">
                <label class="form-label-ge">Entidad bancaria</label>
                <input type="text" name="banco" class="form-input-ge" placeholder="Nombre del banco">
              </div>
              <div class="col-sm-6">
                <label class="form-label-ge">BIC / SWIFT</label>
                <input type="text" name="bic" class="form-input-ge" placeholder="Ej: BBVAESMMXXX">
              </div>
            </div>

            <div class="socio-sepa-aviso mt-4">
              <i class="bi bi-shield-lock-fill"></i>
              <span>Al enviar este formulario autorizas a The Global Empowerment a cargar
                el importe indicado en tu cuenta bancaria con periodicidad mensual,
                conforme a la normativa SEPA de domiciliación bancaria.</span>
            </div>

            <button type="submit" class="btn btn-coral w-100 rounded-pill mt-4"
                    style="font-size:16px; height:52px">
              <i class="bi bi-send-fill me-2"></i>Confirmar y enviar
            </button>

            <p class="form-aviso mt-3">
              <i class="bi bi-lock-fill me-1"></i>
              Tus datos bancarios se tratan con total seguridad conforme a la LOPD.
            </p>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- ===== CTA ===== -->
<section class="cta-final section-padding text-center fade-in">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <h2 class="cta-title">Juntas somos más <em>fuertes</em></h2>
        <p class="cta-subtitle">
          Cada aportación mensual nos acerca a un mundo más justo, digno e inclusivo.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
          <a href="<?= $rootPath ?>/pages/proyectos.php"
             class="btn btn-outline-ge btn-lg rounded-pill px-5">
            Ver nuestros proyectos
          </a>
          <a href="<?= $rootPath ?>/pages/contacto.php"
             class="btn btn-coral btn-lg rounded-pill px-5">
            Contactar
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