<?php
// Definir la cabecera de Moodle para que el contexto de Moodle esté disponible
require_once('../../config.php');

// Página actual
$PAGE->set_context(context_system::instance());
$PAGE->set_url('/local/doom/index.php');
$PAGE->set_pagelayout('embedded');
$PAGE->set_title('DOOM Game');
$PAGE->set_heading('DOOM Game');

// Cabecera HTML
echo $OUTPUT->header();

// Contenido principal
echo '<!doctype html>';
echo '<html lang="en-us">';
echo   '<head>';
echo     '<meta charset="utf-8">';
echo     '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
echo     '<title>DOOM</title>';
echo     '<style type="text/css">';
echo       '.dosbox-container { width: 320px; height: 200px; }';
echo       '.dosbox-container > .dosbox-overlay { background: url(https://js-dos.com/cdn/DOOM.png); }';
echo     '</style>';
echo   '</head>';
echo   '<body>';
echo     '<div id="dosbox"></div>';
echo     '<br/>';
echo     '<button onclick="dosbox.requestFullScreen();">Make fullscreen</button>';
echo     '<script type="text/javascript" src="https://js-dos.com/cdn/js-dos-api.js"></script>';
echo     '<script type="text/javascript">';
echo       'var dosbox = new Dosbox({';
echo         'id: "dosbox",';
echo         'onload: function (dosbox) {';
echo           'dosbox.run("https://js-dos.com/cdn/upload/DOOM-@evilution.zip", "./DOOM");';
echo         '},';
echo         'onrun: function (dosbox, app) {';
echo           'dosbox.command("doom");';
echo           'console.log("App \'" + app + "\' is runned")';
echo         '}';
echo       '});';
echo     '</script>';
echo   '</body>';
echo '</html>';

// Pie de página
echo $OUTPUT->footer();
