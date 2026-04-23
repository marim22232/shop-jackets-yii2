# Магазин верхней одежды на Yii2

Экзаменационный проект: интернет-магазин верхней одежды.

## О проекте
Проект создан на Yii2 Basic Template. Реализован функционал управления категориями и товарами.

## Функционал
- CRUD операции для категорий и товаров
- ЧПУ (человекопонятные URL)
- Отображение списка товаров с помощью виджета
- PostgreSQL база данных
- Миграции для создания таблиц

## Технологии
- PHP 8.3
- Yii2 Framework v2.0.54
- PostgreSQL
- Bootstrap 5
- Git

## Установка

### Требования
- PHP 8.3+
- PostgreSQL
- Composer

### Шаги установки

1. Клонировать репозиторий:
```bash
git clone https://github.com/marim22232/shop-jackets-yii2.git
cd shop-jackets-yii2

## Структура базы данных

### Таблица `categories`
| Поле | Тип | Описание |
|------|-----|----------|
| id | SERIAL | Первичный ключ |
| name | VARCHAR(100) | Название категории |
| slug | VARCHAR(100) | ЧПУ-идентификатор |
| description | TEXT | Описание |
| created_at | TIMESTAMP | Дата создания |

### Таблица `products`
| Поле | Тип | Описание |
|------|-----|----------|
| id | SERIAL | Первичный ключ |
| category_id | INT | Внешний ключ на categories |
| name | VARCHAR(200) | Название товара |
| slug | VARCHAR(200) | ЧПУ-идентификатор |
| price | DECIMAL(10,2) | Цена |
| description | TEXT | Описание |
| image | VARCHAR(255) | Изображение |
| size | VARCHAR(50) | Размеры |
| color | VARCHAR(50) | Цвет |
| material | VARCHAR(100) | Материал |
| stock | INT | Количество на складе |
| created_at | TIMESTAMP | Дата создания |
| updated_at | TIMESTAMP | Дата обновления |

## Маршруты (ЧПУ)

| URL | Описание |
|-----|----------|
| `/` | Главная страница |
| `/products` | Список товаров |
| `/product/{slug}` | Просмотр товара |
| `/categories` | Список категорий |
| `/category/{slug}` | Просмотр категории |

## Скриншоты

### Главная страница
![Главная страница](screenshots/main.png)

### Страница товаров
![Товары](screenshots/products.png)

### Администрирование
![Админ панель](screenshots/admin.png)

## Автор
marim22232

## Лицензия
Учебный проект