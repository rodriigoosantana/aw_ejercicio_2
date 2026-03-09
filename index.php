<?php
/**
 * index.php — Página principal (contenido público)
 *
 * Paso 1: usa $tituloPagina y $contenidoPrincipal + plantilla
 * Paso 2: require config.php como primera instrucción
 */
require_once __DIR__ . '/includes/config.php';

$tituloPagina = 'Portada';

$contenidoPrincipal = <<<HTML
    <h1>Página principal</h1>
    <p>Aquí está el contenido público, visible para todos los usuarios.</p>
HTML;

require __DIR__ . '/includes/vistas/plantillas/plantilla.php';
