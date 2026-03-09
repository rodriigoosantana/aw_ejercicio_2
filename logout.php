<?php
/**
 * logout.php — Cierre de sesión
 *
 * Destruye la sesión del usuario y muestra la página de despedida.
 * session_start() ya fue llamado por Aplicacion::init() en config.php.
 */
require_once __DIR__ . '/includes/config.php';

// Limpiar todas las variables de sesión de autenticación
$_SESSION = [];

// Destruir la cookie de sesión en el cliente (buena práctica)
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(), '',
        time() - 42000,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
    );
}

// Destruir los datos de sesión en el servidor
session_destroy();

$tituloPagina       = 'Hasta pronto';
$contenidoPrincipal = <<<HTML
    <h1>¡Hasta pronto!</h1>
    <p>Has cerrado sesión correctamente.</p>
    <p><a href="index.php">Volver al inicio</a></p>
HTML;

require __DIR__ . '/includes/vistas/plantillas/plantilla.php';
