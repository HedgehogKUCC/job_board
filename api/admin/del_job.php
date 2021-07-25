<?php
    require_once('../../db/conn.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM jobs WHERE id = $id";

    $response = $conn->query($sql);

    if ( !$response ) {
        exit("Error : {$conn->error}");
    }

    if ( !$conn->affected_rows ) {
        exit("<h2>沒有這筆資料</h2>");
    }

    header("Location: ../../admin/index.php");
