<?php
    require_once('./room_controller.php');

    $page_title = "Dettagli Stanza";

    $room_id = isset($_GET['id']) ? $_GET['id'] : null;
    $room    = get_room_by_id($room_id);

    require('./head.php');
    ?>

    </head>
    <body>

    <h1>Stanza con id: <?php echo $room_id; ?></h1>
    <h2>Numero della stanza: <?php echo $room['room_number'] ?></h2>
    <h2>Piano: <?php echo $room['floor'] ?></h2>
    <h2>Numero di letti: <?php echo $room['beds'] ?></h2>
<?php

require('./footer.php');