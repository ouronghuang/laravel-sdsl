## 说明

对于 Laravel 使用 MariaDB 或旧版本的 MySQL 时可能会遇到以下错误：

```
SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes
```

## 安装

使用 composer 安装：

```
composer require orh/laravel-sdsl
```

Laravel < 5.5 则需要手动注册服务提供器

```
// config/app.php
'providers' => [
    Orh\LaravelSdsl\ServiceProvider::class,
];
```

## 许可

MIT
