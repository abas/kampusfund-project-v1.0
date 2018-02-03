# Kampusfund
**`KampusFund`** is a peer to peer investment platform or crowdfunding for business development for student entrepreneurs. The Campus Fund brings together investors who are looking for business opportunities for students and entrepreneurs looking for syariah-based business capital.

# Laravel
[`Laravel`](https://laravel.com) is a _PHP framework_ released under the MIT license, built with the concept of `MVC (view controller model)`. Laravel is an MVP-based website development written in PHP designed to improve software quality by reducing initial development costs and maintenance costs, and to improve the work experience with applications by providing expressive, clear and time-saving syntax.

## Requirement Dev
- composer
- laravel 5.5
  - PHP >= 7.0.0
  - OpenSSL PHP Extension
  - PDO PHP Extension
  - Mbstring PHP Extension
  - Tokenizer PHP Extension
  - XML PHP Extension
- server
  - Apache or Nginx
  - Mysql

## Kampusfund Installation

### Linux 

> clone repo and run the kampusfund-install wizard
``` bash
git clone https://{username}@bitbucket.org/kampusfund/front-end-kampusfund.git
cd front-end-kampusfund
sh kampusfund-install.sh
```

### Windows

> cloning repository
``` winshell
git clone https://{username}@bitbucket.org/kampusfund/front-end-kampusfund.git
cd front-end-kampusfund
```
> install the dependency from composer
```
composer install
```
> configure environment
copy .env.example to root directory folder project, then rename that to .env
set connection database to your local server
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kampusfund
DB_USERNAME=root
DB_PASSWORD=
```
> generating key
```
php artisan key:generate
```
> migrating table to database
```
php artisan migrate
```
> try to run locally
```
php artisan serve
```
> open web browser `localhost:8000`



`createby : Abas_`