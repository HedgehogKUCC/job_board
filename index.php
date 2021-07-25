<?php require_once('front/query/index.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <?php require_once('layout/header.php'); ?>
    <title>首頁 - Job Board 職缺報報</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div style="position: relative;">
            <h1>Job Board 職缺報報</h1>
            <a style="position: absolute; top: 0; right: 0;" href="admin/index.php">管理職缺</a>
        </div>
        <div class="jobs">
            <?php
                foreach ( $rows as $row ) {
                    $d = new DateTime($row['created_at']);
                    $row['created_at'] = $d->format('Y-m-d');
                    echo "
                        <div class='job__card'>
                            <h3 class='title'>{$row['title']}</h3>
                            <p class='desc'>{$row['description']}</p>
                            <div class='salary'>{$row['salary']}</div>
                            <div class='job__card__footer'>
                                <div class='date'>上刊日期：{$row['created_at']}</div>
                                <a class='apply' href='{$row['link']}' target='_blank'>我要應徵</a>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
    <script src="./js/all.js"></script>
</body>
</html>
