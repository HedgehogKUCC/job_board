<?php require_once('query/update.php'); ?>
<?php
    $d = new DateTime($row['expired_at']);
    $row['expired_at'] = $d->format('Y-m-d\TH:i');
?>

<!doctype html>
<html lang="en">
<head>
    <?php require_once('../layout/header.php'); ?>
    <title>更新職缺 - 管理後台</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <div style="position: relative;">
        <h1>更新職缺</h1>
        <a style="position: absolute; top: 0; right: 0;" href="index.php">回管理後台</a>
    </div>
    <form method="post" action="../api/admin/update_job.php">
        <div class="form-control">
            <label for="title">職缺名稱：</label>
            <input id="title" type="text" name="title" value="<?= $row['title'] ?>">
        </div>
        <div class="form-control">
            <label for="desc">職缺描述：</label>
            <textarea name="desc" id="desc" rows="10"><?= $row['description'] ?></textarea>
        </div>
        <div class="form-control">
            <label for="salary">薪資範圍：</label>
            <input id="salary" type="text" name="salary" value="<?= $row['salary'] ?>">
        </div>
        <div class="form-control">
            <label for="link">應徵連結：</label>
            <input id="link" type="text" name="link" value="<?= $row['link'] ?>">
        </div>
        <div class="form-control">
            <label for="expired">下刊時間：</label>
            <input id="expired" type="datetime-local" name="expired" value="<?= $row['expired_at'] ?>">
        </div>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="btn__group">
            <button type="reset">重置</button>
            <button type="submit">確認</button>
        </div>
    </form>
</div>
<script src="../js/all.js"></script>
</body>
</html>
