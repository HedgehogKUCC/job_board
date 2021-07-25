<?php
    require_once('../db/conn.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM jobs WHERE id = $id";

    $response = $conn->query($sql);

    $row = $response->fetch_assoc();

    # $sql = "SELECT now() FROM jobs";