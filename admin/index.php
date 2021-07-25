<!doctype html>
<html lang="en">
<head>
    <?php require_once('../layout/header.php'); ?>
    <?php require_once('query/index.php'); ?>
    <title>管理 - Job Board 職缺報報</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div style="position: relative;">
            <h1>管理後台</h1>
            <a style="position: absolute; top: 0; left: 0;" href="add.php">新增職缺</a>
            <a style="position: absolute; top: 0; right: 0;" href="../index.php">回前台首頁</a>
        </div>
        <div class="jobs">
            <?php
                foreach ($rows as $row) {
                    $d = new DateTime($row['updated_at']);
                    $row['updated_at'] = $d->format('Y-m-d H:i');
                    echo "
                        <div class='job__card'>
                            <h3 class='title'>{$row['title']}</h3>
                            <p class='desc'>{$row['description']}</p>
                            <div class='salary'>{$row['salary']}</div>
                            <div class='job__card__footer'>
                                <div class='date'>更新：{$row['updated_at']}</div>
                                <div class='feature'>
                                    <a class='edit' href='update.php?id={$row['id']}'>編輯</a>
                                    <a class='delete' href='../api/admin/del_job.php?id={$row['id']}'>刪除</a>
                                </div>
                                <div class='expired'>下刊時間：{$row['expired_at']}</div>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
    <script src="../js/all.js"></script>
</body>
</html>
