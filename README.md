
> **NOTE**
>
> You may need to give cache, logs and session folders write permissions
>
>     symfony-blog$ chmod -R 777 var/cache var/logs var/sessions

## Create and Update database
```bash
$ php bin/console doctrine:database:create
$ php bin/console doctrine:schema:update --force
```

Usage
-----

There is no need to configure a virtual host in your web server to access the application.
Just use the built-in web server:

```bash
symfony-blog$ php bin/console server:run
```
