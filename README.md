# Job board 職缺報報

## 注意事項

真正在產品上線時，不能把 `config` ( db\conn.php ) git push

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
