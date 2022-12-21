Implementation of OJ's file_exists && rm PHP challenge at <https://cybervillains.com/@oj/109548713737383310>

```raw
docker build --tag=justinsteven/php-file-exists-rm .
docker run --rm -p 8000:80 justinsteven/php-file-exists-rm
```

```raw
% curl 'http://127.0.0.1:8000/'
Give me a fun filename :)
```
