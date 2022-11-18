## Описание проекта

* * *
Написать программу для игры "Виселица" (hangman). Компьютер загадывает слово из шести букв (список возможных слов нужно заранее сгенерировать и сохранить в базе данных) и рисует на странице отдельные пустые клетки для каждой буквы. Игрок пытается угадать буквы, а затем и все слово целиком. Если игрок правильно угадывает букву, компьютер вписывает ее в клетку. Если ошибается, то рисует одну из частей тела повешенного человека (использовать псевдографику). Чтобы победить, игрок должен угадать все буквы в слове до того, как повешенный человечек будет полностью нарисован.

* * *

* Информация о датах и исходах всех партий, а также о всех попытках, сделанных во время игры? должна сохраняться в базе данных.
* Для каждой игры в базе должна храниться следующая информация:
    * Дата игры
    * Имя игрока
    * Загаданное компьютером слово
    * Исход игры (угадал/не угадал)
    * Запись попыток в формате: номер попытки | предложенная буква | результат
* В программе должны быть реализованы три режима:
    * Новая игра.
    * Вывод списка всех сохраненных в базе партий.
    * Повтор любой сохраненной партии (то есть повтор всех ходов из этой партии).

* * * 

## Требования

Минимальная версия PHP: 8.0 \
Минимальная версия Composer: 2.4.2

* * * 

## Инструкция по установке и запуску игры

Из Github:

1. Склонировать проект на локальную машину;
2. Установить composer, если он не установлен;
3. Перейти в корневой каталог;
4. Выполнить в консоли команду `composer update`;
5. Перейти в каталог bin из корнегого каталога и запустить файл hangman.bat.

Из Packagist:

1. Установить composer, если он не установлен;
2. Перейти в каталог, в который вы будете клонировать проект;
3. Выполнить команду `composer create-project rusjkh/hangman`;
4. Перейти в каталог vendor/bin;
5. Запустить файл hangman.bat.

* * *

## Ссылки

Packagist: <https://packagist.org/packages/rusjkh/hangman>
