# PHP Debugging

[tutorial](https://www.youtube.com/watch?v=JZdMXUIMdQw&t=3273s)

### For Linux Machine

[Installation](https://xdebug.org/docs/install)

`sudo apt install php-xdebug`

 - Enable xdebug

`sudo phpenmod xdebug`

from home/shayon directory insert this

`sudo gedit /etc/php/7.3/mods-available/xdebug.ini`

replace the code below in **xdebug.ini**

```
zend_extension="xdebug.so"
xdebug.remote_enable = 1
xdebug.remote_port = 9000
xdebug.idekey = PHPSTORM
xdebug.show_error_trace = 1
xdebug.remote_autostart = 0
```

 - Parameters

`http://127.0.0.1/php-sql-crud/?XDEBUG_SESSION_START=1`


