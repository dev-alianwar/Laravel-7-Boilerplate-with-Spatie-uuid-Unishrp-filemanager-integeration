## About this Boilerplate

Many developer find it hard to use the following packages all together. For me it took so long fix all after watching and reading so many broken and incomplete tutorials. This boilerplate use uuid as primary key for all models instead auto-increment id. It has integeration with spatie-permissions and example can be seen in seeders.Filemanagement is an important task and unisharip/filemanager is a free a reknowned filemanage. It has a demo link on the homepage.

## What is different 
- Default models to UUID as primary key auto-creation
- Extended Models from Spatie with UUID examples
- Migrations with UUID as primary key 
- Seeders for Spatie, Permissions, Roles, Users
- using server type of set up root folder public_html instead of public with "php artisan storage:link" configuration
- Working demo of Unisharp file manager with pdf and other type documents 



## Installation 
1. clone or download the reporsitory and go into it. 

2. Run commands "composer dump-autoload" and "composer install"

3. Go to your .env file and configure databse settings and APP_URL

4. Run these commands "composer require laravel/ui" and "php artisan ui vue --auth"

5. Run commands "npm install" and "npm run dev".

6. Run commands "php artisan:migrate" and "php artisan db:seed". You can create super admin in the seeders.

7. Run command "php artisan storage:link". We are linking public_html instead of public folder. if you want to use default public folder as root folder then go to Config/filesystem.php and replace 
'links' => [
        base_path('/public_html/storage') => storage_path('app/public'),
    ],
with 
'links' => [
        public_path('/storage') => storage_path('app/public'),
    ],

8. Login to see demo. Go to /demo to see it from views folder rather than vendors  or check laravel-filemanager/demo default demo from package.

9. After Storage linking my application is working fine. You may change lmf.php 
 Optional - If you are using it on a server and root directory is public_html instead of public. Then go to Config/lfm.php 
Change 'base_directory' => 'public_html'
- [Unisharp/filemanager/config](https://unisharp.github.io/laravel-filemanager/config).

## Help 
Further you can get help from these documentation links.


- [Spatie laravel permissions](https://github.com/spatie/laravel-permission).
- [Unisharp Filemanager](https://unisharp.github.io/laravel-filemanager/installation).
- [Uuid Helper laravel](https://laravel.com/docs/7.x/helpers#method-str-uuid).
- [laravel documentation](https://laravel.com/docs/7.x).



## Security Vulnerabilities

If you discover a security vulnerability within this integeration, please send an e-mail to Ali Anwar via [ali.anwar33@gmail.com](ali.anwar33@gmail.com). 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
