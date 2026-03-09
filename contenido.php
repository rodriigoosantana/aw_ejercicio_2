<?php
/**
 * contenido.php — Contenido exclusivo para usuarios registrados
 *
 * Implementa control de acceso: sólo usuarios con sesión activa pueden
 * ver el contenido. El resto ven un mensaje de acceso denegado.
 */
require_once __DIR__ . '/includes/config.php';

$tituloPagina = 'Contenido';

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    // Usuario no autenticado: informar y ofrecer enlace de login
    $contenidoPrincipal = <<<HTML
        <h1>Acceso restringido</h1>
        <p>Debes <a href="login.php">iniciar sesión</a> para ver este contenido.</p>
    HTML;
} else {
    // Usuario autenticado: mostrar el contenido completo
    $contenidoPrincipal = <<<HTML
        <h1>Texto del contenido principal para usuarios</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam augue sem,
        molestie vel elementum quis, consequat consectetur velit. Sed malesuada in
        arcu quis placerat. Proin sed ligula leo. Pellentesque habitant morbi
        tristique senectus et netus et malesuada fames ac turpis egestas.</p>

        <p>Maecenas nec orci mollis, pretium erat in, blandit felis. Etiam vestibulum
        eu sapien a sagittis. Maecenas eget posuere turpis. Fusce egestas lacus at
        tortor scelerisque vulputate. Mauris tincidunt massa sem, nec dapibus risus
        facilisis vitae.</p>
    HTML;
}

require __DIR__ . '/includes/vistas/plantillas/plantilla.php';
