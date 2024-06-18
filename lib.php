<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Función para cargar el juego DOOM.
 * Esta función puede ser llamada desde cualquier parte de tu código para obtener el contenido del juego DOOM.
 *
 * @return string Contenido HTML necesario para mostrar el juego DOOM.
 */
function local_doom_load_game() {
    $output = '';

    // Construir el HTML necesario para mostrar el juego
    $output .= '<!doctype html>';
    $output .= '<html lang="en-us">';
    $output .= '<head>';
    $output .= '<meta charset="utf-8">';
    $output .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
    $output .= '<title>DOOM</title>';
    $output .= '<style type="text/css">';
    $output .= '.dosbox-container { width: 320px; height: 200px; }';
    $output .= '.dosbox-container > .dosbox-overlay { background: url(https://js-dos.com/cdn/DOOM.png); }';
    $output .= '</style>';
    $output .= '</head>';
    $output .= '<body>';
    $output .= '<div id="dosbox"></div>';
    $output .= '<br/>';
    $output .= '<button onclick="dosbox.requestFullScreen();">Make fullscreen</button>';
    $output .= '<script type="text/javascript" src="' . moodle_url('/local/doom/js-dos-api.js') . '"></script>'; // Asegúrate de que js-dos-api.js esté en la carpeta local/doom
    $output .= '<script type="text/javascript">';
    $output .= 'var dosbox = new Dosbox({';
    $output .= 'id: "dosbox",';
    $output .= 'onload: function (dosbox) {';
    $output .= 'dosbox.run("' . moodle_url('/local/doom/game/DOOM-@evilution.zip') . '", "./DOOM");'; // Ajusta la ruta según la estructura de tus archivos
    $output .= '},';
    $output .= 'onrun: function (dosbox, app) {';
    $output .= 'console.log("App \'" + app + "\' is runned")';
    $output .= '}';
    $output .= '});';
    $output .= '</script>';
    $output .= '</body>';
    $output .= '</html>';

    return $output;
}
