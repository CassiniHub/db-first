
<?php
    $page_title = "Crea una nuova stanza";
    require('./head.php');
?>
</head>
<body>

    <form action="./" method="POST">

        <p>
            <label for="">Room number</label>
            <input type="number" name="room_number">
        </p>
        <p>
            <label for="">Floor</label>
            <input type="number" name="floor">
        </p>
        <p>
            <label for="">Beds</label>
            <input type="number" name="beds">
        </p>
        <button type="submit">add</button>

    </form>
    
<?php
require('./footer.php');