<?php
/**
 * login.php — Página de autenticación
 *
 * Paso 5: ya no necesita procesarLogin.php; FormularioLogin gestiona
 *         tanto el GET (mostrar) como el POST (procesar).
 * Paso 7: no hay require_once de clases; el autoloader PSR-4 las carga.
 */
require_once __DIR__ . '/includes/config.php';

use es\ucm\fdi\aw\formularios\FormularioLogin;

$form = new FormularioLogin();

// gestiona() devuelve HTML con el formulario (vacío o con errores),
// o redirige a index.php y hace exit() si el login fue correcto.
$htmlFormulario = $form->gestiona();

$tituloPagina      = 'Login';
$contenidoPrincipal = "<h1>Acceso al sistema</h1>{$htmlFormulario}";

require __DIR__ . '/includes/vistas/plantillas/plantilla.php';
