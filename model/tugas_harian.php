<?php
include '../config/connection.php';
//FLEXIBLE
function select($row)
{
    global $conn;
    $query = mysqli_query($conn, $row);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $rows[] = $row;
    }
    return $rows;
}
