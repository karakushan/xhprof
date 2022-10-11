# XHPROF

## Установка

#### Клонируем репозиторий

```bash 
cd ~
mkdir source
cd ~/source
git clone https://github.com/longxinH/xhprof
cd xhprof/extension/
``` 
#### Найдите расположение php-config

```bash
which php-config
```

#### Установка расширения

```bash
phpize
./configure --with-php-config=/usr/bin/php-config
make
sudo make install
```

#### Добавляем расширение в php.ini

7.0 заменить на вашу версию php

```bash
echo "extension=xhprof.so" >> /etc/php/7.0/cli/php.ini
echo "xhprof.output_dir=/tmp/xhprof" >> /etc/php/7.0/cli/php.ini
```

#### Перезапускаем php-fpm

php7.0-fpm замените на вашу версию php

```bash
sudo service php7.0-fpm restart
```

#### Клонируем этот репозиторий в корень вашего сайта

```bash
cd path/to/your/site
git clone 
```

#### Подключаем xhprof в вашем проекте

В шапку сайта вставляем

```php
<?php
require_once 'xhprof/header.php';
?>
```

В подвал сайта вставляем

```php
<?php
require_once 'xhprof/footer.php';
?>
```

Чтобы запустить профилирование нужно добавить в адресную строку ?xhprof=ваше_пространство_имен.












