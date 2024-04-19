# Enrollment Module

# Necessary files or steps

1.  Install composer. https://getcomposer.org/download/
3.  Install wkhtmltopdf. Link: https://wkhtmltopdf.org/downloads.html  

# Working

1. run `composer install`
2. run `npm install`
3. adjust the app_key in the env file and generate your own using the `php artisan key:generate`
4. `php artisan migrate:fresh --seed` <- for backend
5. `php artisan serve`
6. `npm run dev` - optional (will be used for tailwind & alpine JS)

P.S. Make a new branch when fixing or enhancing features
