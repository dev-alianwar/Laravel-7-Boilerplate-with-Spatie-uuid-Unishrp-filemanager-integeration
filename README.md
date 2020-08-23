## About this Boilerplate

Many developer find it hard to use the following packages all together. It gives you a lot for starting a new project by having three important packages pre-installed and configured . Firstly, this boilerplate uses uuid as primary key for all models instead auto-increment id. Secondly, it has integeration with spatie-permissions and example can be seen in seeders. Thirdly, it has pre-configured  unisharip/filemanager with CKEditor, TinyMCE and other examples. Finally, It has a demo link on the homepage.

## What is different? 
- Default models to UUID as primary key auto-creation
- Extended models from Spatie with UUID examples
- Dataabase migrations with UUID as primary key 
- Seeders for Spatie, Permissions, Roles, Users
- Using server type of set up for root directory public_html instead of public with "php artisan storage:link" configuration
- Working demo of Unisharp file manager with pdf and other type documents 



## Installation 
1. clone or download the reporsitory and go into it. 

2. Run commands "composer dump-autoload" and "composer install"
```
composer install
```

```
composer dump-autoload
```
3. Run command php artisan key:generate

```
php artisan key:generate

```

4. Go to your .env file and configure database settings and APP_URL
APP_URL is imprtant to configure for corrrect path for images uploaded by Unisharp filemanager.



5. Run these commands "composer require laravel/ui" and "php artisan ui vue --auth"
```
composer require laravel/ui

php artisan ui vue --auth
```


6. Run commands "php artisan:migrate" and "php artisan db:seed". You can create super admin in the seeders.

```
php artisan:migrate

php artisan db:seed
```


7. Important to Read
- For public as root directory 
 If you want to work with defaut "public" directory by laravel instead of "public_html" then rename and public_html to public and go to Step 8.
 
 - For public_html as root directory without Laravel Mix
 If you don't want to compile assets and also dont want to introduce other dependencies then ignore this step and Step 8 and Step 9.

- For public_html as root directory with laravel mix 
Ignore Step 8 and Follow this process after Step 9
Copy compiled app.css and app.js from public/css and public/js and repalce app.css into public_html/css/app.css and app.js into public_html/js/app.js  
(I am loooking for fixing this issue if anyone knows please contribute)


8. We are linking public_html instead of public folder. if you want to use default public folder as root folder then go to Config/filesystem.php and replace 
```
'links' => [
        base_path('/public_html/storage') => storage_path('app/public'),
    ],
```
with
``` 
'links' => [
        public_path('/storage') => storage_path('app/public'),
    ],
```



9. Run commands "npm install" and "npm run dev".
```
npm install
```
```
npm run dev
```
or 
```
npm run production
```


10. Run command "php artisan storage:link".
```
php artisan storage:link
```

11. Login to see demo. Go to /demo to see it from views folder rather than vendors  or check laravel-filemanager/demo default demo from package.

12. After Storage linking my application is working fine. You may change lmf.php 
 Optional - If you are using it on a server and root directory is public_html instead of public. Then go to Config/lfm.php 
Change 'base_directory' => 'public_html'. Check configuration option on [Unisharp/filemanager/config](https://unisharp.github.io/laravel-filemanager/config).


## Give a star
Don't forget give me star on this repository 


## Help 
Further you can get help from these documentation links or create issue on github.


- [Spatie laravel permissions](https://github.com/spatie/laravel-permission).
- [Unisharp Filemanager](https://unisharp.github.io/laravel-filemanager/installation).
- [Uuid Helper laravel](https://laravel.com/docs/7.x/helpers#method-str-uuid).
- [laravel documentation](https://laravel.com/docs/7.x).



## Security Vulnerabilities

If you discover a security vulnerability within this integeration, please send an e-mail to Ali Anwar via [ali.anwar33@gmail.com](ali.anwar33@gmail.com). 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
