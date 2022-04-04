Техническое задание InfoService
==========
Ресурс для подтверждения email
------------
**https://mailtrap.io/**


1. В терминале: **git clone  https://github.com/MacroMorr/TestInfoSevice.git**
3. Требуемые пакеты PHP 7+, Composer 2+

3. #### Создать БД MYSQL
   ```
   create database `TestInfoService` character set utf8 collate utf8_general_ci;
   ```
   
   > В таблица ```users```, разрешить полю ```email_verified_at в default значении NULL``` 
   
4. #### Заполнить файл .evn.example > DB_CONNECTION=mysql и MAIL_MAILER=smtp
   
5. #### Сделать Миграцию
```
php artisan migrate
```

6. #### Запустить проект
   ```
   php artisan serve
   ```
   
   #### Преобразование файлов внутри проекта (Установка Node.JS) - в случае отсутствия
   #### Устанавливаются библиотеки - npm i (npm install) - в случае отсуствия
