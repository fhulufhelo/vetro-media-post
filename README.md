# instructions

## installation

```git clone https://github.com/fhulufhelo/vetro-media-post.git```

```cd vetro-media-post```

```composer install```

```npm install```

```cp .env.example .env```

```php artisan key:generate```

```php artisan migrate```

```php artisan serve```

## Interaction

visit ```http://127.0.0.1:8000/register``` after registration you will be redirected to a dashboard where you will create your first post.

posts are listed here ```http://127.0.0.1:8000/post```

# How I would deploy?

For a simple application, i would buy debian/ubuntu server from cloud provider

Create a deployer user and install web server components
and after that i would use deployer script to deploy to the server
