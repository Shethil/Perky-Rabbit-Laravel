# Perky-Rabbit-Laravel


## Requirements
- Php version should be 8.0 or greater [Get php](https://www.php.net/downloads.php)
- Composer [Get composer](https://getcomposer.org/download/)

For run it on local use a server (like XAMPP, LARAGON etc.) and set database name.
## Installation
### Clone the application from github

```bash
git clone --single-branch --branch master https://github.com/Shethil/Perky-Rabbit-Laravel.git
```
### Goto the project directory

### Install Composer

```bash
composer install
```

### Copy .env.example file and rename it in .env

```bash
cp .env.example .env
```

### Create App key

```bash
php artisan key:generate
```

### Create database and set the name in .env file 

```bash
DB_DATABASE=YourDbName
DB_USERNAME=DbUserName
DB_PASSWORD=DbPassword
```

### Run migration 

```bash
php artisan migrate
```

### Run seeder

```bash
php artisan db:seed
```
