<?php
    require_once('../../db/conn.php');

    $id = $_POST['id'];
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

    $sql = "UPDATE jobs SET title = '$title', description = '$desc', salary = '$salary', link = '$link', updated_at = now(), expired_at = '$expired_at' WHERE id = $id";

    $response = $conn->query($sql);

    if ( !$response ) {
        exit("Error : {$conn->error}");
    }

    if ( !$conn->affected_rows ) {
        exit("<h2>沒有這筆資料</h2>");
    }

    header('Location: ../../admin/index.php');
