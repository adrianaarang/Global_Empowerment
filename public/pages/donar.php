<?php
$rootPath    = '..';
$currentPage = 'donar';
$pageTitle   = 'Donar';
$pageDesc    = 'Haz una donación puntual a The Global Empowerment y contribuye al empoderamiento de comunidades vulnerables.';
$extraCss    = 'donar.css';
$extraJs     = 'donar.js';

require $rootPath . '/includes/head.php';
require $rootPath . '/includes/navbar.php';
?>

<!-- ===== HERO ===== -->
<section class="donar-hero">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 text-center fade-in">
        <span class="section-label">Donación puntual</span>
        <h1 class="section-title" style="font-size: clamp(2rem, 4vw, 3rem);">
          Tu donación genera<br>
          <em style="font-style:normal; color:var(--coral)">impacto real</em>
        </h1>
        <p class="text-muted-ge mt-3" style="font-size:16px">
          Cada aportación, por pequeña que sea, contribuye directamente al empoderamiento
          de mujeres y comunidades vulnerables. Elige la cantidad y el método que prefieras.
        </p>
      </div>
    </div>

    <div class="row justify-content-center mt-5 g-4">

      <!-- CARD PRINCIPAL -->
      <div class="col-lg-6">
        <div class="donar-card fade-in">

          <!-- PASO 1 -->
          <div id="step1">
            <div class="donar-step-header">
              <span class="donar-step-num">1</span>
              <span>Elige la cantidad</span>
            </div>
            <div class="donar-cantidades mt-4">
              <button type="button" class="donar-cantidad" data-valor="5">5 €</button>
              <button type="button" class="donar-cantidad" data-valor="10">10 €</button>
              <button type="button" class="donar-cantidad selected" data-valor="20">20 €</button>
              <button type="button" class="donar-cantidad" data-valor="50">50 €</button>
              <button type="button" class="donar-cantidad" data-valor="100">100 €</button>
            </div>
            <div class="mt-3">
              <label for="otraDonar" class="form-label-ge">Otra cantidad (€)</label>
              <input type="number" id="otraDonar" class="form-input-ge"
                     placeholder="Ej: 35" min="1" style="max-width:160px">
            </div>
            <div class="donar-impacto mt-4">
              <i class="bi bi-heart-fill"></i>
              <span id="donarImpactoTexto">Con tu donación puntual podrás financiar nuestro proyecto.</span>
            </div>
            <button type="button" class="btn btn-coral w-100 rounded-pill mt-4"
                    id="btnStep2" style="font-size:16px; height:52px">
              Continuar <i class="bi bi-arrow-right ms-2"></i>
            </button>
          </div>

          <!-- PASO 2 -->
          <div id="step2" style="display:none">
            <button type="button" class="donar-volver" id="volverStep1">
              <i class="bi bi-arrow-left me-1"></i> Volver
            </button>
            <div class="donar-step-header mt-3">
              <span class="donar-step-num">2</span>
              <span>Método de pago</span>
            </div>
            <p class="text-muted-ge mt-1" style="font-size:14px">
              Donación de <strong id="step2Cantidad">20 €</strong>
            </p>
            <div class="donar-metodos mt-4">
              <label class="donar-metodo">
                <input type="radio" name="metodo" value="bizum">
                <div class="donar-metodo-inner">
                  <span class="donar-metodo-icon">📱</span>
                  <div>
                    <strong>Bizum</strong>
                    <small>Paga con tu móvil al instante</small>
                  </div>
                  <i class="bi bi-check-circle-fill donar-metodo-check"></i>
                </div>
              </label>
              <label class="donar-metodo">
                <input type="radio" name="metodo" value="tarjeta">
                <div class="donar-metodo-inner">
                  <span class="donar-metodo-icon">💳</span>
                  <div>
                    <strong>Tarjeta bancaria</strong>
                    <small>Visa, Mastercard, American Express</small>
                  </div>
                  <i class="bi bi-check-circle-fill donar-metodo-check"></i>
                </div>
              </label>
            </div>
            <button type="button" class="btn btn-coral w-100 rounded-pill mt-4"
                    id="btnStep3" style="font-size:16px; height:52px">
              Continuar <i class="bi bi-arrow-right ms-2"></i>
            </button>
          </div>

          <!-- PASO 3A: Bizum -->
          <div id="step3bizum" style="display:none">
            <button type="button" class="donar-volver" id="volverStep2bizum">
              <i class="bi bi-arrow-left me-1"></i> Volver
            </button>
            <div class="donar-step-header mt-3">
              <span class="donar-step-num">3</span>
              <span>Datos Bizum</span>
            </div>
            <p class="text-muted-ge mt-1" style="font-size:14px">
              Donación de <strong id="step3BizumCantidad">20 €</strong> via Bizum
            </p>
            <form id="formBizum" novalidate>
              <div class="row g-3 mt-2">
                <div class="col-12">
                  <label class="form-label-ge">Teléfono Bizum *</label>
                  <div class="donar-telefono-wrap">
                    <span class="donar-prefijo">🇪🇸 +34</span>
                    <input type="tel" id="bizumTelefono" class="form-input-ge"
                           placeholder="600 000 000" maxlength="12">
                  </div>
                  <small style="font-size:12px; color:#a09092; margin-top:4px; display:block">
                    Número asociado a tu cuenta Bizum
                  </small>
                </div>
                <div class="col-sm-6">
                  <label class="form-label-ge">Nombre *</label>
                  <input type="text" id="bizumNombre" class="form-input-ge"
                         placeholder="Tu nombre">
                </div>
                <div class="col-sm-6">
                  <label class="form-label-ge">Email *</label>
                  <input type="email" id="bizumEmail" class="form-input-ge"
                         placeholder="tu@email.com">
                </div>
              </div>
              <div class="donar-aviso-bizum mt-4">
                <i class="bi bi-info-circle-fill"></i>
                <span>Recibirás una notificación en tu app bancaria para confirmar el pago de
                  <strong id="bizumImporte">20 €</strong>.</span>
              </div>
              <label class="socio-check mt-3">
                <input type="checkbox" id="bizumPrivacidad">
                <span>He leído y acepto la <a href="#">política de privacidad</a> *</span>
              </label>
              <button type="submit" class="btn btn-coral w-100 rounded-pill mt-4"
                      style="font-size:16px; height:52px">
                📱 Confirmar donación por Bizum
              </button>
              <p class="form-aviso mt-3">
                <i class="bi bi-lock-fill me-1"></i>
                Pago seguro. Tus datos están protegidos conforme a la LOPD.
              </p>
            </form>
          </div>

          <!-- PASO 3B: Tarjeta -->
          <div id="step3tarjeta" style="display:none">
            <button type="button" class="donar-volver" id="volverStep2tarjeta">
              <i class="bi bi-arrow-left me-1"></i> Volver
            </button>
            <div class="donar-step-header mt-3">
              <span class="donar-step-num">3</span>
              <span>Datos de tarjeta</span>
            </div>
            <p class="text-muted-ge mt-1" style="font-size:14px">
              Donación de <strong id="step3TarjetaCantidad">20 €</strong>
            </p>
            <form id="formTarjeta" novalidate>
              <div class="row g-3 mt-2">
                <div class="col-sm-6">
                  <label class="form-label-ge">Nombre *</label>
                  <input type="text" id="tarjetaNombre" class="form-input-ge"
                         placeholder="Tu nombre">
                </div>
                <div class="col-sm-6">
                  <label class="form-label-ge">Email *</label>
                  <input type="email" id="tarjetaEmail" class="form-input-ge"
                         placeholder="tu@email.com">
                </div>
                <div class="col-12">
                  <label class="form-label-ge">Número de tarjeta *</label>
                  <div class="tarjeta-numero-wrap">
                    <input type="text" id="tarjetaNumero" class="form-input-ge"
                           placeholder="0000 0000 0000 0000" maxlength="19">
                    <span class="tarjeta-tipo-icon" id="tarjetaTipoIcon">💳</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label-ge">Caducidad *</label>
                  <input type="text" id="tarjetaCaducidad" class="form-input-ge"
                         placeholder="MM/AA" maxlength="5">
                </div>
                <div class="col-sm-6">
                  <label class="form-label-ge">CVV *</label>
                  <div class="cvv-wrap">
                    <input type="text" id="tarjetaCvv" class="form-input-ge"
                           placeholder="000" maxlength="4">
                    <span class="cvv-tooltip" title="3 dígitos al dorso de tu tarjeta">
                      <i class="bi bi-question-circle"></i>
                    </span>
                  </div>
                </div>
                <div class="col-12">
                  <label class="form-label-ge">Titular de la tarjeta *</label>
                  <input type="text" id="tarjetaTitular" class="form-input-ge"
                         placeholder="Nombre tal como aparece en la tarjeta">
                </div>
              </div>
              <div class="donar-seguridad mt-4">
                <i class="bi bi-shield-lock-fill"></i>
                <span>Pago 100% seguro con cifrado SSL. No almacenamos datos de tarjeta.</span>
              </div>
              <label class="socio-check mt-3">
                <input type="checkbox" id="tarjetaPrivacidad">
                <span>He leído y acepto la <a href="#">política de privacidad</a> *</span>
              </label>
              <button type="submit" class="btn btn-coral w-100 rounded-pill mt-4"
                      style="font-size:16px; height:52px">
                <i class="bi bi-lock-fill me-2"></i>Donar <span id="tarjetaImporte">20 €</span> de forma segura
              </button>
              <p class="form-aviso mt-3">
                <i class="bi bi-lock-fill me-1"></i>
                Pago seguro SSL. Tus datos están protegidos conforme a la LOPD.
              </p>
            </form>
          </div>

          <!-- PASO 4: Confirmación -->
          <div id="step4" style="display:none">
            <div class="donar-confirmacion text-center">
              <div class="donar-confirmacion-icon">
                <i class="bi bi-check-lg"></i>
              </div>
              <h2 class="mt-4">¡Gracias por tu donación!</h2>
              <p class="text-muted-ge mt-2">
                Hemos recibido tu donación de <strong id="confirmacionCantidad">20 €</strong>.
                En breve recibirás un email de confirmación.
              </p>
              <p class="text-muted-ge mt-2" style="font-size:14px">
                Tu aportación contribuye directamente al empoderamiento de mujeres
                y comunidades vulnerables. Gracias por ser parte del cambio.
              </p>
              <a href="<?= $rootPath ?>/pages/proyectos.php"
                 class="btn btn-outline-ge rounded-pill px-5 mt-4">
                Ver nuestros proyectos
              </a>
            </div>
          </div>

        </div>
      </div>

      <!-- LATERAL -->
      <div class="col-lg-4 fade-in fade-in-delay">
        <div class="donar-lateral">
          <h3 class="donar-lateral-title">¿Por qué donar?</h3>
          <div class="donar-lateral-item">
            <div class="donar-lateral-icon" style="background:rgba(255,136,91,0.1); color:var(--coral)">
              <i class="bi bi-flower1"></i>
            </div>
            <div>
              <strong>Impacto directo</strong>
              <p>Los fondos van directamente a proyectos sobre el terreno.</p>
            </div>
          </div>
          <div class="donar-lateral-item">
            <div class="donar-lateral-icon" style="background:rgba(95,113,97,0.1); color:var(--verde)">
              <i class="bi bi-eye"></i>
            </div>
            <div>
              <strong>Total transparencia</strong>
              <p>Publicamos informes detallados de cada euro invertido.</p>
            </div>
          </div>
          <div class="donar-lateral-item">
            <div class="donar-lateral-icon" style="background:rgba(166,75,42,0.1); color:var(--terracota)">
              <i class="bi bi-receipt"></i>
            </div>
            <div>
              <strong>Certificado fiscal</strong>
              <p>Recibirás un certificado para desgravar en tu declaración de la renta.</p>
            </div>
          </div>
          <div class="donar-lateral-item">
            <div class="donar-lateral-icon" style="background:rgba(61,44,46,0.07); color:var(--ebano)">
              <i class="bi bi-shield-check"></i>
            </div>
            <div>
              <strong>Pago seguro</strong>
              <p>Todos los pagos están protegidos con cifrado SSL de extremo a extremo.</p>
            </div>
          </div>
          <div class="donar-lateral-img mt-4">
            <img src="<?= $rootPath ?>/assets/images/proyectos/IMGP3983.jpg"
                 alt="Impacto de tu donación">
          </div>
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
        <h2 class="cta-title">¿Prefieres un compromiso <em>mensual</em>?</h2>
        <p class="cta-subtitle">
          Hazte socio/a y genera un impacto sostenible con una aportación mensual.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
          <a href="<?= $rootPath ?>/pages/hazte-socio.php"
             class="btn btn-coral btn-lg rounded-pill px-5">
            <i class="bi bi-heart-fill me-2"></i>Hazte socio/a
          </a>
          <a href="<?= $rootPath ?>/pages/proyectos.php"
             class="btn btn-outline-ge btn-lg rounded-pill px-5">
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