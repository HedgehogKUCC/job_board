<!doctype html>
<html lang="en">
<head>
    <?php require_once('../layout/header.php'); ?>
    <title>新增職缺 - 管理後台</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div style="position: relative;">
            <h1>新增職缺</h1>
            <a style="position: absolute; top: 0; right: 0;" href="index.php">回管理後台</a>
        </div>
        <form method="post" action="../api/admin/add_job.php">
            <div class="form-control">
                <label for="title">職缺名稱：</label>
                <input id="title" type="text" name="title">
            </div>
            <div class="form-control">
                <label for="desc">職缺描述：</label>
                <textarea name="desc" id="desc" rows="10"></textarea>
            </div>
            <div class="form-control">
                <label for="salary">薪資範圍：</label>
                <input id="salary" type="text" name="salary">
            </div>
            <div class="form-control">
                <label for="link">應徵連結：</label>
                <input id="link" type="text" name="link">
            </div>
            <div class="form-control">
                <label for="expired">下刊時間：</label>
                <input id="expired" type="datetime-local" name="expired">
            </div>
            <div class="btn__group">
                <button type="reset">重置</button>
                <button type="submit">確認</button>
            </div>
        </form>
    </div>
    <script src="../js/all.js"></script>
</body>
</html>
