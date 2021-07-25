<?php
    require_once('../../db/conn.php');

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $salary = $_POST['salary'];
    $link = $_POST['link'];
    $expired = $_POST['expired'];

    $d = new DateTime($expired);
    $expired_at = $d->format('Y-m-d H:i:s');

    if ( empty($title) || empty($desc) || empty($salary) || empty($link) || empty($expired_at) ) {
        exit("<h2>請將資料填寫完整</h2>");
    }

    $sql = "INSERT INTO jobs (title, description, salary, link, expired_at) VALUES ('$title', '$desc', '$salary', '$link', '$expired_at')";

    $response = $conn->query($sql);

    if ( !$response ) {
        exit("Error : {$conn->error}");
    }

    header('Location: ../../admin/index.php');
