# Tweety project
## About Tweety
It is a Twitter like application made in Laravel and Bootstrap.
This application made for learning purpose.
You can expect similar functionality like:
- register/login user
- post short character tweets
- like/dislike tweets
- explore other users
- subscribe for other users to see their tweets
- upload custom avatars and banners
- etc ...

## Installation guide
 1. Open a terminal
 2. Clone this repository
```
git clone https://github.com/nfcrazyhun/tweetyproject.git
```
 3. cd into it
 4. Copy then rename .env.example to .env
 5. Install dependencies
```
composer install
```
 6. Install npm packages
```
npm install
```
 7. Build your assets
```
npm run dev
```
 8. Create the symbolic links for storage
```
php artisan storage:link
```
 9. Generate application key
```
php artisan key:generate
```
 10. Create a new database
- db name: tweety_db
 11. Run database migrations
```
php artisan migrate
```
 11.  -> 11.1 (optional)
Run migration with demo data seeder
```
php artisan migrate:fresh --seed
```
demo user login:
- email: test@test1.com
- password: 123qwe

## Note
The project was made with the following software versions:
- PHP 7.4.9
- MySQL 8.0.21
- Laravel 7.25.0
- Bootstrap 4.5.2
