<?php

$result = get_rooms();

// var_dump($result);
if( $result && $result->num_rows > 0 ) {

    ?>
    <ul class="room-list">
        <?php
        
            while( $row = $result->fetch_assoc() ) {

                // var_dump($row);
                // echo "<li>". $row['room_number'] ."</li>";
                ?>

                <li>
                    <a href="./room-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['room_number']; ?></a>
                </li>
                <?php

            }
        
        ?>
    </ul>
<?php

} else {
    echo "<p>Nessun risultato.</p>";
}

?>

<p>
<a href="add-room.php">Add room</a></p>