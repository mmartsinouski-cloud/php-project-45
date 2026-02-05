### Hexlet tests and linter status:
[![Actions Status](https://github.com/mmartsinouski-cloud/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/mmartsinouski-cloud/php-project-45/actions)
### SonarQube
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=mmartsinouski-cloud_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=mmartsinouski-cloud_php-project-45)

Набор из 5 консольных игр для тренировки мозга. Каждая игра предлагает 3 вопроса, на которые нужно дать правильные ответы.

## Игры

1. **Brain Even** - Определение чётного числа
2. **Brain Calc** - Арифметические выражения
3. **Brain GCD** - Наибольший общий делитель
4. **Brain Progression** - Арифметическая прогрессия
5. **Brain Prime** - Определение простого числа

## Требования

- PHP 8.0 или выше
- Composer 2.0 или выше

## Установка

```bash
# Клонируйте репозиторий
git clone https://github.com/ваш-username/php-project-45.git

# Перейдите в директорию проекта
cd php-project-45

# Установите зависимости
make install
# или
composer install
```

### Запуск всех игр по отдельности:
```bash
# Приветствие
make brain-games

# Игра "Чётное число"
make brain-even

# Игра "Калькулятор"
make brain-calc

# Игра "НОД"
make brain-gcd

# Игра "Прогрессия"
make brain-progression

# Игра "Простое число"
make brain-prime
```
### Пример игры

- brain-games: https://asciinema.org/a/tIrB3Vh2vCaoh8WV
- brain-even: https://asciinema.org/a/P149UASKfGZbbuS2
- brain-calc: https://asciinema.org/a/FTdY52sCK609zF3f
- brain-gcd: https://asciinema.org/a/WqIeBP9ZNyP7ot9q
- brain-progression: https://asciinema.org/a/GgnO6fbf4tyou4WT
- brain-prime: https://asciinema.org/a/KNzIcPkyGwXSS5W4


### Технологии
- PHP 8.0+ - Основной язык программирования
- Composer - Управление зависимостями
- WP-CLI PHP Tools - CLI утилиты для вывода
- PHP CodeSniffer - Проверка стиля кода (PSR12)
- Make - Автоматизация задач

### Лицензия
Этот проект лицензирован под лицензией MIT. См. файл LICENSE для подробностей.