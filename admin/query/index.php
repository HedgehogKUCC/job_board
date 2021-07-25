<?php
    require_once('../db/conn.php');

    $sql = "SELECT * FROM jobs ORDER BY expired_at DESC";

    $response = $conn->query($sql);

    $rows = $response->fetch_all(MYSQLI_ASSOC);
