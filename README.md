Техническое задание InfoService
==========
Ресурс для подтверждения email
------------
**https://mailtrap.io/**
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=admin@laravel.com
MAIL_FROM_NAME="${APP_NAME}"
```

1. В терминале: **git clone https://github.com/MacroMorr/TestInfoService.git**
2. Требуемые пакеты PHP 7+, Composer 2+

3. ####Создать БД MYSQL
   >create database `TestInfoService` character set utf8 collate utf8_general_ci;
   ### в файле .evn 
   ##### обратите внимание на DB_PORT=3306, DB_USERNAME=root и DB_PASSWORD=root (введите свои данные, если они другие)
   ```DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=TestInfoService
   DB_USERNAME=root
   DB_PASSWORD=root```
   
4. ####Сделайть Миграцию
```php artisan migrate```
> В таблица users, разрешить полю email_verified_at в default значении NULL 

5. ####Запустить проект
   ```php artisan serve```
