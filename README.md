# TosDer
Built on Laravel 5.6 by a group of 3 students from CKCC, TosDer is an application for finding local tours in Cambodia.

## Getting Started
Follow these instructions to quickly get the copy of application up and running for testing or developing.

### 1st: Rename .env.example file to .env, and config it as follow
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[your database name here]
DB_USERNAME=[your database username here]
DB_PASSWORD=[your database password here]
```
save, and exit.

### 2nd: Run database migrations and seeds to create admin account
Open up command prompt, or git bash and run the following command:
```
composer install
```
```
php artisan package:discover
```
```
php artisan key:generate
```
```
php artisan migrate
```
```
php artisan db:seed
```
done, and now you may start the application with the command: 
```
php artisan serve
```
Default admin account credential is:
```
Username: admin
Password: 123456
```
And first time launching the application, please add new provinces before guide can sign up and create tour.
go to this link
```
localhost:[port number]/provinces
```
