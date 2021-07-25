<?php
    require_once('db/conn.php');

    // 愈晚新增的職缺，顯示要在愈前面！
    // 新增條件：沒有過期
    $sql = 'SELECT * FROM jobs WHERE now() < expired_at ORDER BY created_at DESC';

    $response = $conn->query($sql);

    $rows = $response->fetch_all(MYSQLI_ASSOC);
