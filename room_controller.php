<?php

require_once('./connection.php');

function get_rooms() {
    global $conn;

    $sql = "SELECT * FROM stanze ORDER BY room_number ASC";
    return $conn->query($sql);
}

function create_room($room_number,$floor,$beds) {

    global $conn;

    $sql = "INSERT INTO stanze (room_number,floor,beds) values (?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('iii',$room_number,$floor,$beds);
    $stmt->execute();
}

function get_room_by_id($room_id) {
    global $conn;

    $sql = "SELECT room_number, floor, beds
            FROM stanze
            WHERE id = ?
    ";

    $stmt = $conn->prepare($sql);

    $stmt -> bind_param('i', $room_id);
    $stmt -> execute();
    $stmt -> bind_result($room_number, $floor, $beds);

    $stmt -> fetch();

    $room = [
        'room_number' => $room_number,
        'floor' => $floor,
        'beds' => $beds
    ];

    return $room;
}