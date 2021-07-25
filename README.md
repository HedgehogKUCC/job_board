# Job board 職缺報報

## 注意事項

真正在產品上線時，不能把 `config` ( db\conn.php ) git push

<br>

## MySQL

Schema: conrad

Table: jobs

```sql
create table jobs
(
    id          int auto_increment                primary key,
    title       varchar(64)                          not null,
    description text                                 not null,
    salary      varchar(32)                          not null,
    link        varchar(300)                         not null,
    created_at  datetime default current_timestamp() not null,
    updated_at  datetime default current_timestamp() not null,
    expired_at  datetime default current_timestamp() null
);
```

<br>

## 日期轉換

前端 `<input type="datetime-local">` 格式為 `Y-m-d\TH:i`

後端 資料庫 格式為 `Y-m-d H:i:s`

<br>

### 新增職缺

前端 `admin\add.php`

```html
<form method="post" action="../api/admin/add_job.php">
    <div class="form-control">
        <label for="expired">下刊時間：</label>
        <input id="expired" type="datetime-local" name="expired">
    </div>
</form>
```

<br>

後端 `api\admin\add_job.php`

```php
$expired = $_POST['expired'];

$d = new DateTime($expired);
$expired_at = $d->format('Y-m-d H:i:s');
```

---

<br>

### 更新職缺

前端 `admin\update.php`

從資料庫取得日期資料後轉換為前端日期格式

```php
<?php require_once('query/update.php'); ?>
<?php
    $d = new DateTime($row['expired_at']);
    $row['expired_at'] = $d->format('Y-m-d\TH:i');
?>
```

---

<br>

## 前台畫面

![](https://i.imgur.com/e1RgOOx.png)

---

<br>

## 後台畫面

![](https://i.imgur.com/1FQvRQV.jpg)

---

<br>

## 新增職缺

![](https://i.imgur.com/xRBoX3G.png)

---

<br>

## 更新職缺

![](https://i.imgur.com/Qkd2cRw.png)

---

<br>