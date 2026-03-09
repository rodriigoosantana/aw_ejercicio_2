<?php
/**
 * registro.php — Página de registro de nuevos usuarios
 *
 * Paso 5: consolida la lógica de registro.php + procesarRegistro.php
 *         en FormularioRegistro.
 */
require_once __DIR__ . '/includes/config.php';

use es\ucm\fdi\aw\formularios\FormularioRegistro;

$form = new FormularioRegistro();

// gestiona() maneja GET y POST; en POST exitoso redirige a index.php
$htmlFormulario = $form->gestiona();

$tituloPagina      = 'Registro';
$contenidoPrincipal = "<h1>Registro de usuario</h1>{$htmlFormulario}";

require __DIR__ . '/includes/vistas/plantillas/plantilla.php';
