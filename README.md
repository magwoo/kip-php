# Что это
Локальная среда разработки на php + mysql без скачивания кучи мусора настроенная под меня, но может и вам покажется удобной\
Буду рад каким то полезным обновлениям от вас


## Основные Страницы
- Главная http://localhost/
- Админ панель http://localhost/admin


## Иерархия
- **/migration** миграции для бд mysql
- **/data** данные mysql для сохранения после выключения контейнера
- **/pages** страницы вашего сайта, принимаются только **.php** файлы
- **/static** картинки, стили, скрипты и тп статические файлы


## Данные для входа MySQL
адрес: **127.0.0.1**\
порт: **3306**\
пользователь: **root**\
пароль: **root**\
база данных: **website**

___пароль, порт и базу данных можно изменить в файле окружения [.env](./.env)___


# Что куда
Для запуска требуется Docker и Docker-compose

- [Docker](https://www.docker.com/products/docker-desktop/)
- [Docker-compose](https://docs.docker.com/compose/install/)


## Проект
Скачиваете проект и открываете в [VSCode](https://code.visualstudio.com/download)


## Подготовка (___все команды запускать в терминале___)
1. Запустите сборку **один раз на устройство** сборку php с нужными плагиными командой **docker-compose build**
3. Запустите контейнеры с php nginx и mysql командой **docker-compose up -d**
2. Выполните sql миграцию из папки **migration** вручную, [подключившись](#данные-для-входа-mysql) к базе данных или используя инструменты миграции
4. Все! [Основные страницы](#основные-страницы) теперь доступны в браузере

## Команды (___все команды запускать в терминале___)
- **docker-compose up -d** запустить все контейнеры
- **docker-compose down** остановить все контейнеры


### Мои контакты:
 - [телеграмм](https://t.me/magwooo)
