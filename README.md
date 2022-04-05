Техническое задание InfoService
==========
Ресурс для подтверждения email
------------
**https://mailtrap.io/**

1. Требуемые пакеты PHP 7+, Composer 2+

2. В терминале: **git clone  https://github.com/MacroMorr/TestInfoSevice.git**
3. Перейти в папку с проектом, выполнить ```composer update```
4. Создать файл .evn командой ```cp .env.example .env```, сгенерировать новый ключ ```php artisan key:generate```

5. #### Создать БД MYSQL
   ```
   create database `TestInfoService` character set utf8 collate utf8_general_ci;
   ```
   
   > В таблица ```users```, разрешить полю ```email_verified_at в default значении NULL``` 
   
5. #### Заполнить файл .evn.example > DB_CONNECTION=mysql и MAIL_MAILER=smtp
   
6. #### Сделать Миграцию
```
php artisan migrate
```

7. #### Запустить проект (предварительно очистив кЭш)
   ```php artisan config:cache```
   ```
   php artisan serve
   ```
   
   #### Преобразование файлов внутри проекта (Установка Node.JS) - в случае отсутствия
   #### Устанавливаются библиотеки - npm i (npm install) - в случае отсуствия
