# Book & Author System

Небольшое приложение на Laravel про связь «один ко многим»: у автора много книг (`Author hasMany Book`). Есть создание автора с валидацией и страница автора со списком его книг.

![Laravel](https://img.shields.io/badge/Laravel_13-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP_8.3-777BB4?logo=php&logoColor=white)

## Что внутри
- Модели `Author` и `Book` и миграции со внешним ключом
- `POST /authors`: создание автора с валидацией запроса
- `GET /authors/{author}`: страница автора (route model binding)

## Запуск
```bash
composer install
cp .env.example .env && php artisan key:generate
php artisan migrate
php artisan serve
```

---
Учебное задание, КБТУ.
