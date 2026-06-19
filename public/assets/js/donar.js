/* ============================================================
   DONAR.JS — The Global Empowerment
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

  let cantidadSeleccionada = 20;
  let metodoSeleccionado   = null;

  const impactos = {
    5:   'Con 5 € puedes financiar cuadernos y lápices para una niña durante un mes.',
    10:  'Con 10 € cubres el transporte de una mujer a su centro de formación durante un mes.',
    20:  'Con 20 € puedes financiar materiales de formación para una mujer durante un mes.',
    50:  'Con 50 € financias una semana completa de formación técnica para dos mujeres.',
    100: 'Con 100 € cubres un mes de microcrédito para que una mujer lance su negocio.',
  };

  // ── Helpers ──────────────────────────────────────────────────
  function marcarError(id, mensaje) {
    const input = document.getElementById(id);
    if (!input) return;
    input.style.setProperty('border-color', '#e74c3c', 'important');
    input.style.setProperty('box-shadow', '0 0 0 3px rgba(231,76,60,0.12)', 'important');
    let err = input.parentNode.querySelector('.campo-error');
    if (!err) {
      err = document.createElement('small');
      err.classList.add('campo-error');
      err.style.cssText = 'color:#e74c3c;font-size:12px;margin-top:4px;display:block';
      input.parentNode.appendChild(err);
    }
    err.textContent = mensaje;
  }

  function limpiarError(id) {
    const input = document.getElementById(id);
    if (!input) return;
    input.style.removeProperty('border-color');
    input.style.removeProperty('box-shadow');
    const err = input.parentNode.querySelector('.campo-error');
    if (err) err.remove();
  }

  function marcarOk(id) {
    const input = document.getElementById(id);
    if (!input) return;
    input.style.setProperty('border-color', '#27ae60', 'important');
    input.style.setProperty('box-shadow', '0 0 0 3px rgba(39,174,96,0.12)', 'important');
  }

  function validarEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  function validarTelefono(tel) {
    return /^[6789]\d{8}$/.test(tel.replace(/\s/g, ''));
  }

  function validarLuhn(numero) {
    const digits = numero.replace(/\s/g, '');
    if (!/^\d{13,19}$/.test(digits)) return false;
    let suma = 0, doble = false;
    for (let i = digits.length - 1; i >= 0; i--) {
      let d = parseInt(digits[i]);
      if (doble) { d *= 2; if (d > 9) d -= 9; }
      suma += d;
      doble = !doble;
    }
    return suma % 10 === 0;
  }

  function detectarTarjeta(numero) {
    const n = numero.replace(/\s/g, '');
    if (/^4/.test(n))      return '💙';
    if (/^5[1-5]/.test(n)) return '🔴';
    if (/^3[47]/.test(n))  return '🟦';
    return '💳';
  }

  function validarCaducidad(valor) {
    if (!/^\d{2}\/\d{2}$/.test(valor)) return false;
    const [mes, anio] = valor.split('/').map(Number);
    if (mes < 1 || mes > 12) return false;
    const ahora   = new Date();
    const expDate = new Date(2000 + anio, mes - 1, 1);
    return expDate >= new Date(ahora.getFullYear(), ahora.getMonth(), 1);
  }

  // ── Mostrar step ─────────────────────────────────────────────
  function mostrarStep(id) {
    ['step1','step2','step3bizum','step3tarjeta','step4'].forEach(s => {
      const el = document.getElementById(s);
      if (el) el.style.display = s === id ? 'block' : 'none';
    });
  }

  function actualizarImpacto(cantidad) {
    const texto = impactos[cantidad] ||
      `Con ${cantidad} € contribuyes directamente al empoderamiento de mujeres y comunidades.`;
    document.getElementById('donarImpactoTexto').textContent = texto;
  }

  function actualizarCantidades(cantidad) {
    document.getElementById('step2Cantidad').textContent         = cantidad + ' €';
    document.getElementById('step3BizumCantidad').textContent    = cantidad + ' €';
    document.getElementById('step3TarjetaCantidad').textContent  = cantidad + ' €';
    document.getElementById('bizumImporte').textContent          = cantidad + ' €';
    document.getElementById('tarjetaImporte').textContent        = cantidad + ' €';
    document.getElementById('confirmacionCantidad').textContent  = cantidad + ' €';
  }

  // ── PASO 1 ────────────────────────────────────────────────────
  const btns      = document.querySelectorAll('.donar-cantidad');
  const otraInput = document.getElementById('otraDonar');

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      btns.forEach(b => b.classList.remove('selected'));
      btn.classList.add('selected');
      cantidadSeleccionada = parseInt(btn.dataset.valor);
      otraInput.value = '';
      actualizarImpacto(cantidadSeleccionada);
    });
  });

  otraInput.addEventListener('input', () => {
    if (otraInput.value) {
      btns.forEach(b => b.classList.remove('selected'));
      cantidadSeleccionada = parseInt(otraInput.value) || 0;
      actualizarImpacto(cantidadSeleccionada);
    }
  });

  document.getElementById('btnStep2').addEventListener('click', () => {
    const cantidad = otraInput.value ? parseInt(otraInput.value) : cantidadSeleccionada;
    if (!cantidad || cantidad < 1) {
      alert('Por favor introduce una cantidad válida.');
      return;
    }
    cantidadSeleccionada = cantidad;
    actualizarCantidades(cantidad);
    mostrarStep('step2');
  });

  // ── PASO 2 ────────────────────────────────────────────────────
  document.querySelectorAll('input[name="metodo"]').forEach(radio => {
    radio.addEventListener('change', () => {
      metodoSeleccionado = radio.value;
    });
  });

  document.getElementById('btnStep3').addEventListener('click', () => {
    if (!metodoSeleccionado) {
      alert('Por favor selecciona un método de pago.');
      return;
    }
    mostrarStep(metodoSeleccionado === 'bizum' ? 'step3bizum' : 'step3tarjeta');
  });

  document.getElementById('volverStep1').addEventListener('click', () => mostrarStep('step1'));

  // ── PASO 3A: Bizum ───────────────────────────────────────────
  document.getElementById('volverStep2bizum').addEventListener('click', () => mostrarStep('step2'));

  document.getElementById('bizumTelefono').addEventListener('input', function() {
    let val = this.value.replace(/\D/g, '');
    this.value = val.replace(/(\d{3})(\d{3})(\d{3})/, '$1 $2 $3');
  });

  document.getElementById('bizumTelefono').addEventListener('blur', function() {
    if (this.value.trim()) {
      if (!validarTelefono(this.value)) {
        marcarError('bizumTelefono', 'Número de móvil español no válido (9 dígitos).');
      } else {
        limpiarError('bizumTelefono');
        marcarOk('bizumTelefono');
      }
    }
  });

  document.getElementById('formBizum').addEventListener('submit', function(e) {
    e.preventDefault();
    let valido = true;

    const tel        = document.getElementById('bizumTelefono').value.trim();
    const nombre     = document.getElementById('bizumNombre').value.trim();
    const email      = document.getElementById('bizumEmail').value.trim();
    const privacidad = document.getElementById('bizumPrivacidad').checked;

    if (!tel || !validarTelefono(tel)) {
      marcarError('bizumTelefono', 'Introduce un número de móvil español válido.');
      valido = false;
    } else { limpiarError('bizumTelefono'); marcarOk('bizumTelefono'); }

    if (!nombre) {
      marcarError('bizumNombre', 'El nombre es obligatorio.');
      valido = false;
    } else { limpiarError('bizumNombre'); marcarOk('bizumNombre'); }

    if (!email || !validarEmail(email)) {
      marcarError('bizumEmail', 'Introduce un email válido.');
      valido = false;
    } else { limpiarError('bizumEmail'); marcarOk('bizumEmail'); }

    if (!privacidad) {
      alert('Debes aceptar la política de privacidad para continuar.');
      valido = false;
    }

    if (!valido) return;
    mostrarStep('step4');
  });

  // ── PASO 3B: Tarjeta ─────────────────────────────────────────
  document.getElementById('volverStep2tarjeta').addEventListener('click', () => mostrarStep('step2'));

  document.getElementById('tarjetaNumero').addEventListener('input', function() {
    let val = this.value.replace(/\D/g, '').substring(0, 16);
    this.value = val.replace(/(\d{4})(?=\d)/g, '$1 ');
    document.getElementById('tarjetaTipoIcon').textContent = detectarTarjeta(val);
  });

  document.getElementById('tarjetaNumero').addEventListener('blur', function() {
    if (this.value.trim()) {
      if (!validarLuhn(this.value)) {
        marcarError('tarjetaNumero', 'Número de tarjeta no válido.');
      } else {
        limpiarError('tarjetaNumero');
        marcarOk('tarjetaNumero');
      }
    }
  });

  document.getElementById('tarjetaCaducidad').addEventListener('input', function() {
    let val = this.value.replace(/\D/g, '').substring(0, 4);
    if (val.length >= 3) val = val.substring(0, 2) + '/' + val.substring(2);
    this.value = val;
  });

  document.getElementById('tarjetaCaducidad').addEventListener('blur', function() {
    if (this.value.trim()) {
      if (!validarCaducidad(this.value)) {
        marcarError('tarjetaCaducidad', 'Fecha no válida o tarjeta caducada.');
      } else {
        limpiarError('tarjetaCaducidad');
        marcarOk('tarjetaCaducidad');
      }
    }
  });

  document.getElementById('tarjetaCvv').addEventListener('input', function() {
    this.value = this.value.replace(/\D/g, '').substring(0, 4);
  });

  document.getElementById('formTarjeta').addEventListener('submit', function(e) {
    e.preventDefault();
    let valido = true;

    const nombre     = document.getElementById('tarjetaNombre').value.trim();
    const email      = document.getElementById('tarjetaEmail').value.trim();
    const numero     = document.getElementById('tarjetaNumero').value.trim();
    const cad        = document.getElementById('tarjetaCaducidad').value.trim();
    const cvv        = document.getElementById('tarjetaCvv').value.trim();
    const titular    = document.getElementById('tarjetaTitular').value.trim();
    const privacidad = document.getElementById('tarjetaPrivacidad').checked;

    if (!nombre) {
      marcarError('tarjetaNombre', 'El nombre es obligatorio.');
      valido = false;
    } else { limpiarError('tarjetaNombre'); marcarOk('tarjetaNombre'); }

    if (!email || !validarEmail(email)) {
      marcarError('tarjetaEmail', 'Introduce un email válido.');
      valido = false;
    } else { limpiarError('tarjetaEmail'); marcarOk('tarjetaEmail'); }

    if (!validarLuhn(numero)) {
      marcarError('tarjetaNumero', 'Número de tarjeta no válido.');
      valido = false;
    } else { limpiarError('tarjetaNumero'); marcarOk('tarjetaNumero'); }

    if (!validarCaducidad(cad)) {
      marcarError('tarjetaCaducidad', 'Fecha no válida o tarjeta caducada.');
      valido = false;
    } else { limpiarError('tarjetaCaducidad'); marcarOk('tarjetaCaducidad'); }

    if (!cvv || cvv.length < 3) {
      marcarError('tarjetaCvv', 'CVV no válido.');
      valido = false;
    } else { limpiarError('tarjetaCvv'); marcarOk('tarjetaCvv'); }

    if (!titular) {
      marcarError('tarjetaTitular', 'El titular es obligatorio.');
      valido = false;
    } else { limpiarError('tarjetaTitular'); marcarOk('tarjetaTitular'); }

    if (!privacidad) {
      alert('Debes aceptar la política de privacidad para continuar.');
      valido = false;
    }

    if (!valido) return;
    mostrarStep('step4');
  });

});