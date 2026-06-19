document.addEventListener('DOMContentLoaded', () => {

  let cantidadSeleccionada = 30;
  const btns      = document.querySelectorAll('.socio-cantidad');
  const otraInput = document.getElementById('otraCantidad');

  // ── Validar DNI/NIE ──────────────────────────────────────────
  function validarDNI(valor) {
    const dni = valor.trim().toUpperCase();
    const letras = 'TRWAGMYFPDXBNJZSQVHLCKE';

    // DNI: 8 números + letra
    const regDNI = /^(\d{8})([A-Z])$/;
    // NIE: X/Y/Z + 7 números + letra
    const regNIE = /^([XYZ])(\d{7})([A-Z])$/;

    if (regDNI.test(dni)) {
      const num   = parseInt(dni.substring(0, 8));
      const letra = dni.charAt(8);
      return letras[num % 23] === letra;
    }

    if (regNIE.test(dni)) {
      const nieMap = { X: '0', Y: '1', Z: '2' };
      const num    = parseInt(nieMap[dni[0]] + dni.substring(1, 8));
      const letra  = dni.charAt(8);
      return letras[num % 23] === letra;
    }

    return false;
  }

  // ── Validar IBAN español ─────────────────────────────────────
  function validarIBAN(valor) {
    const iban = valor.replace(/\s/g, '').toUpperCase();

    // Debe empezar por ES y tener 24 caracteres
    if (!/^ES\d{22}$/.test(iban)) return false;

    // Reordenar: mover los 4 primeros al final
    const reordenado = iban.slice(4) + iban.slice(0, 4);

    // Convertir letras a números (A=10, B=11, ..., Z=35)
    const numerico = reordenado.split('').map(c => {
      const code = c.charCodeAt(0);
      return code >= 65 ? (code - 55).toString() : c;
    }).join('');

    // Módulo 97
    let resto = '';
    for (let i = 0; i < numerico.length; i++) {
      resto = (resto + numerico[i]);
      if (resto.length >= 9) {
        resto = (parseInt(resto) % 97).toString();
      }
    }
    return parseInt(resto) % 97 === 1;
  }

  // ── Mostrar error en campo ───────────────────────────────────
  function marcarError(id, mensaje) {
    const input = document.getElementById(id);
    input.style.borderColor = '#e74c3c';
    input.style.boxShadow   = '0 0 0 3px rgba(231,76,60,0.12)';
    let err = input.nextElementSibling;
    if (!err || !err.classList.contains('campo-error')) {
      err = document.createElement('small');
      err.classList.add('campo-error');
      err.style.cssText = 'color:#e74c3c; font-size:12px; margin-top:4px; display:block';
      input.parentNode.insertBefore(err, input.nextSibling);
    }
    err.textContent = mensaje;
  }

  function limpiarError(id) {
    const input = document.getElementById(id);
    input.style.borderColor = '';
    input.style.boxShadow   = '';
    const err = input.nextElementSibling;
    if (err && err.classList.contains('campo-error')) err.remove();
  }

  // ── Selección de cantidad ────────────────────────────────────
  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      btns.forEach(b => b.classList.remove('selected'));
      btn.classList.add('selected');
      cantidadSeleccionada = parseInt(btn.dataset.valor);
      otraInput.value = '';
    });
  });

  otraInput.addEventListener('input', () => {
    if (otraInput.value) {
      btns.forEach(b => b.classList.remove('selected'));
      cantidadSeleccionada = parseInt(otraInput.value) || 0;
    }
  });

  // ── Abrir modal ──────────────────────────────────────────────
  document.getElementById('btnQuieroSocio').addEventListener('click', () => {
    const cantidad = otraInput.value ? parseInt(otraInput.value) : cantidadSeleccionada;
    document.getElementById('modalCantidadTexto').textContent = cantidad + ' €';
    document.getElementById('paso2Cantidad').textContent      = cantidad + ' €';
    document.getElementById('finalDonacion').value            = cantidad;
    document.getElementById('paso1').style.display = 'block';
    document.getElementById('paso2').style.display = 'none';
    new bootstrap.Modal(document.getElementById('modalSocio')).show();
  });

  // ── Validación en tiempo real DNI ────────────────────────────
  document.getElementById('p1_dni').addEventListener('blur', function() {
    if (this.value.trim()) {
      if (!validarDNI(this.value)) {
        marcarError('p1_dni', 'DNI/NIE no válido. Comprueba el formato y la letra.');
      } else {
        limpiarError('p1_dni');
        this.style.borderColor = '#27ae60';
        this.style.boxShadow   = '0 0 0 3px rgba(39,174,96,0.12)';
      }
    }
  });

  // ── Pasar a paso 2 ───────────────────────────────────────────
  document.getElementById('btnPaso2').addEventListener('click', () => {
    let valido = true;

    const nombre = document.getElementById('p1_nombre').value.trim();
    const email  = document.getElementById('p1_email').value.trim();
    const dni    = document.getElementById('p1_dni').value.trim();
    const privacidad = document.getElementById('p1_privacidad').checked;

    if (!nombre) {
      marcarError('p1_nombre', 'El nombre es obligatorio.');
      valido = false;
    } else { limpiarError('p1_nombre'); }

    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      marcarError('p1_email', 'Introduce un email válido.');
      valido = false;
    } else { limpiarError('p1_email'); }

    if (!dni) {
      marcarError('p1_dni', 'El DNI/NIE es obligatorio.');
      valido = false;
    } else if (!validarDNI(dni)) {
      marcarError('p1_dni', 'DNI/NIE no válido. Comprueba el formato y la letra.');
      valido = false;
    } else { limpiarError('p1_dni'); }

    if (!privacidad) {
      alert('Debes aceptar la política de privacidad para continuar.');
      valido = false;
    }

    if (!valido) return;

    document.getElementById('finalNombre').value    = nombre;
    document.getElementById('finalApellido').value  = document.getElementById('p1_apellido').value;
    document.getElementById('finalEmail').value     = email;
    document.getElementById('finalTelefono').value  = document.getElementById('p1_telefono').value;
    document.getElementById('finalDireccion').value = document.getElementById('p1_direccion').value;
    document.getElementById('finalDni').value       = dni;

    document.getElementById('paso1').style.display = 'none';
    document.getElementById('paso2').style.display = 'block';
  });

  // ── Volver al paso 1 ─────────────────────────────────────────
  document.getElementById('btnVolver').addEventListener('click', () => {
    document.getElementById('paso2').style.display = 'none';
    document.getElementById('paso1').style.display = 'block';
  });

  // ── Formatear IBAN en tiempo real ────────────────────────────
  document.getElementById('ibanInput').addEventListener('input', function() {
    let val = this.value.replace(/\s/g, '').toUpperCase();
    this.value = val.match(/.{1,4}/g)?.join(' ') || val;
  });

  // ── Validar IBAN al salir del campo ──────────────────────────
  document.getElementById('ibanInput').addEventListener('blur', function() {
    if (this.value.trim()) {
      if (!validarIBAN(this.value)) {
        marcarError('ibanInput', 'IBAN no válido. Debe empezar por ES y tener 24 caracteres.');
      } else {
        limpiarError('ibanInput');
        this.style.borderColor = '#27ae60';
        this.style.boxShadow   = '0 0 0 3px rgba(39,174,96,0.12)';
      }
    }
  });

  // ── Validar IBAN al enviar ───────────────────────────────────
  document.getElementById('formFinal').addEventListener('submit', function(e) {
    e.preventDefault();
    let valido = true;

    const iban    = document.getElementById('ibanInput').value.trim();
    const titular = document.querySelector('[name="titular"]').value.trim();

    if (!titular) {
      marcarError('ibanInput', ''); // no hay id en titular, manejo manual
      alert('El titular de la cuenta es obligatorio.');
      valido = false;
    }

    if (!iban) {
      marcarError('ibanInput', 'El IBAN es obligatorio.');
      valido = false;
    } else if (!validarIBAN(iban)) {
      marcarError('ibanInput', 'IBAN no válido. Comprueba el número.');
      valido = false;
    }

    if (!valido) return;

    // Todo correcto — aquí irá el envío por PHP cuando conectemos el backend
    alert('✅ Solicitud enviada correctamente. Nos pondremos en contacto contigo pronto.');
    bootstrap.Modal.getInstance(document.getElementById('modalSocio')).hide();
  });

});