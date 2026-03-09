<?php
/**
 * admin.php — Consola de administración
 *
 * Control de acceso de doble nivel:
 *   1. El usuario debe estar autenticado (sesión activa)
 *   2. El usuario debe tener el rol 'admin' ($_SESSION['esAdmin'] === true)
 */
require_once __DIR__ . '/includes/config.php';

$tituloPagina = 'Administración';

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    $contenidoPrincipal = <<<HTML
        <h1>Acceso restringido</h1>
        <p>Debes <a href="login.php">iniciar sesión</a> para acceder a esta sección.</p>
    HTML;
} elseif (!isset($_SESSION['esAdmin']) || $_SESSION['esAdmin'] !== true) {
    // Autenticado pero sin permisos de administrador
    $contenidoPrincipal = <<<HTML
        <h1>Acceso denegado</h1>
        <p>No tienes permisos suficientes para administrar la web.</p>
    HTML;
} else {
    // Administrador autenticado
    $contenidoPrincipal = <<<HTML
        <h1>Consola de administración</h1>
        <p>Aquí estarían todos los controles de administración.</p>
    HTML;
}

require __DIR__ . '/includes/vistas/plantillas/plantilla.php';
