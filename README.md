ФУНКЦИОНАЛ

Регистрация новых пользователей

Просмотр профиля пользователя

ТРЕБОВАНИЯ

PHP 8.1+

Laravel 10+

SQLite (или другая СУБД)

Composer

УСТАНОВКА

1. git clone https://github.com/DanyaErezer/user-API
2. Установление зависимостей (composer install)
3. Настройка окружения (cp .env.example .env|
   php artisan key:generate)
4. Настройка DB
5. Выполнение миграций (php artisan migrate)
6. Регистрация пользователя

URL: /api/registration

Method: POST

Успешный ответ (201 ОК)

Headers:
Accept: application/json
Content-Type: application/json

Body:
json
{
"email": "user@example.com",
"password": "Password123",
"gender": "male"
}

7. Получение профиля пользователя 

URL: /api/profile/{id}

Method: GET

Успешный ответ (200 OK)

json
{
"id": 1,
"email": "user@example.com",
"gender": "male",
"created_at": "2023-01-01T00:00:00.000000Z",
"updated_at": "2023-01-01T00:00:00.000000Z"
}
