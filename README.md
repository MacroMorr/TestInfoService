Техническое задание InfoService
==========
Ресурс для подтверждения email
------------
**https://mailtrap.io/**


1. В терминале: **git clone  https://github.com/MacroMorr/TestInfoSevice.git**
3. Требуемые пакеты PHP 7+, Composer 2+

3. #### Создать БД MYSQL
   >create database `TestInfoService` character set utf8 collate utf8_general_ci;
   
4. #### Заполнить файл .evn.example > DB_CONNECTION=mysql и MAIL_MAILER=smtp
   
5. #### Сделайть Миграцию
```php artisan migrate```
> В таблица users, разрешить полю email_verified_at в default значении NULL 

6. #### Запустить проект
   ```php artisan serve```
