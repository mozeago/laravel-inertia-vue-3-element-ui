# Laravel Inertia ,vite and vue 3 as of 27th May 2023

## Steps in creating

### Server-side configuration

    - create a new laravel project using composer  create-project `name of your project`
    - rename welcome.blade.php to app.blade.php
    - replace the code on the now app.blade.php with the code from the inertia [server-side] html shortcode given in the documentation.
    - php artisan generate the Inertia middleware as give in the documentation on inertiajs website.
    - Add the middleware that you generated to the App/Http/ Kernel.php under the web group.

### client-side configuration

    - npm install {inertiajs/vue3 & plugin-vue}.
    - on vite.config.js import vue from 'vitejs/plugin-vue';
    - add vue(), to the plugins in the vite.config.js before the laravel.
    - Delete bootstrap.js from /resources/js 
    - edit app.js to include the {initialize inertia app } code sample given on the inertia website.
    - Create a Laravel Controller to fetch sample data from the Model;
    - Create a Laravel route to the controller method. return the variable that you would wish to return.
    - you can add your favorite front end e.g ElemetUI or Tailwind css.
