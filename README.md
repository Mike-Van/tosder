# TosDer
Built on Laravel 5.6 by a group of 3 students from CKCC, TosDer is an application for finding local tours in Cambodia.

## Getting Started
Follow these instructions to quickly get the copy of application up and running for testing or developing.

### 1st: Config .env file to connect to your local database
Locate .env file at the root of the application, and open it with any text editor. Then, look for the following options:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[your database name here]
DB_USERNAME=[your database username here]
DB_PASSWORD=[your database password here]
```
save, and exit.

### 2nd: Run database migrations
Open up command prompt, or git bash and run the following command:
```
php artisan migrate
```
done, and now you may start the application with the command: 
```
php artisan serve
```
