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
?>

<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>DOOM</title>
    <style type="text/css">
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dosbox-container {
            width: 640px;
            height: 400px;
        }
        .dosbox-container > .dosbox-overlay {
            background: url(https://js-dos.com/cdn/DOOM.png);
        }
    </style>
</head>
<body>
    <div id="dosbox" class="dosbox-container"></div>
    <br/>
    <button onclick="dosbox.requestFullScreen();">Make fullscreen</button>
    <script type="text/javascript" src="https://js-dos.com/cdn/js-dos-api.js"></script>
    <script type="text/javascript">
        var dosbox = new Dosbox({
            id: "dosbox",
            onload: function (dosbox) {
                dosbox.run("./game/DOOM-@evilution.zip", "./DOOM");
            },
            onrun: function (dosbox, app) {
                console.log("App '" + app + "' is runned");
            }
        });
    </script>
</body>
</html>

<?php
// Pie de página
echo $OUTPUT->footer();
?>
