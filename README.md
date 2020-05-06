# Laravel is Awesome

Laravel is awesome is a application that tries to show the power of Laravel by incomperating more and more difficult tasks.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites
Installation for Windows

[XAMPP](https://www.apachefriends.org/index.html)

[Composer](https://www.apachefriends.org/index.html) Install setup.exe, Select xampp/php/php.exe

### Installing

A step by step series of examples that tell you how to get a development env running


1) Open XAMPP click start on Apache and MySQL. If it won't start make sure that there is no connections that already listen to port 80 You can check all ports by writing anywhere on cmd command `netstat -ano`. Using task manager you can kill a process that listens to port 80. By searchinh by PID.
2) Setup php version to match XAMPP version by searching View advanced system settings > Environment Variables > In System variables search for Path. Click edit > click browse select XAMPP/php php application. Restart cmd/powershell. Write php -v. It should match with XAMPP php version.
3) Fork this repository. 
4) Clone your own forked repository `git clone <your Repo link for example https://github.com/misterDoe/Laravel-is-awesome.git>`
5) Set the upstream. by writing `git remote add upstream <https://github.com/ArnasDickus/Laravel-is-awesome.git>`
6) Check if it worked by writing `git remote -v` You should get 2 origin and 2 upstream

Currently you should be able to visit Laravel by going http://localhost/laravel-is-awesome/public/. It will require some configuration to have it working properly.
7) Visit C:\xampp\apache\conf\extra and open httpd-vhosts.conf file.
Add these lines of code:
```
<VirtualHost laravelawesome.test:80>
  DocumentRoot "c:/xampp/htdocs/laravel-is-awesome/public" 
  <Directory "c:/xampp/htdocs/laravel-is-awesome/public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
  </Directory>
</VirtualHost>
```
8) In C:\Windows\System32\drivers\etc add this line:
```
127.0.0.1 laravelawesome.test
```
9) Restart Apache in XAMPP.
10) You should be able to visit laravelawesome.test page/

Setup Database locally:
11) Visit http://localhost/phpmyadmin/
12) Create new database called `laravel-is-awesome` set charachter set to be `uf8mb4_unicode_ci` (Before last option)
13) Create a new account for database only. Host name must be localhost
14) In .env add correct details. Using commands 
```
php artisan tinker
DB::connection()->getPdo();
```
you can check if database is connected.

## Running the tests

Currently we have no test. Although it's a good idea.

### Break down into end to end tests

Tests are coming soon.

### And coding style tests



## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [laravel](https://laravel.com/) - The web framework used

## Contributing

Currently if you interested in contributing, make an issue.

## Versioning

We have no versioning so far.

## Authors

* **Arnas Dičkus** - *Initial work* - [Github](https://github.com/ArnasDickus)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

