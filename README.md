<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## About Business Logic
A simple app for checking subscription status of each application in one or multi markets.

## Builder Design Pattern
The builder pattern is a design pattern designed to provide a flexible solution to various object creation problems in object-oriented programming. 
The intent of the builder design pattern is to separate the construction of a complex object from its representation
You can read more at: [wikipedia](https://en.wikipedia.org/wiki/Builder_pattern)

## Install Steps
- Run `git clone https://hrgit.abrha.net/alikhoshkar/business-logic.git` for clone project from GitHub in your system.
- Run `composer install` for install needed package.
- Run `cp .env.example .env` for create a copy of .env.example as `.env` project.
- Fill the database credentials at `.env` file.
- Run `php artisan key:generate` for generate `APP_KEY` value in your `.env` file.
- After creating your database in your mysql, Run `php artisan migrate --seed`
- Run `php artisan serve` to run project at: `http://127.0.0.1:8000`,Or you can use your own virtual host.
- Make sure `APP_URL` in your `.env` file has same value with your virtual host url.
- Because this project is full manage by Restful Api, for easy to use please
  install `Postman`: [download](https://www.postman.com/downloads/)
- I prepare for you
  my `postman collection`: [download](https://hrgit.abrha.net/alikhoshkar/business-logic/-/blob/main/public/business_logic.postman_collection)
- If you download my `postman collection`,make sure your `enviroment` postman has one key: `base_api_url`
  which simply get your virtual host url,or you
  can move your own way.
- Enjoy it.
- 
## Run Schedule
This project also has schedule worker for check subscriptions status weekly

- Run `php artisan schedule:work` **DON'T close your terminal when schedule is working**
<br>
Schedule also set some `Queue Job` for sending email.

## Run Queue Jobs
This project also has Queue Jobs worker for send mail which subscriptions status changed from expired to active
<br>
**Only run this if you run schedule**
- Run `php artisan queue:work` **DON'T close your terminal when queue is working**

## Run Testing Project
Almost funny part of each project, is TDD (Test-driven
development). [Read More](https://en.wikipedia.org/wiki/Test-driven_development).
<br>
if you want to run test in this project follow these steps:

- Run `cp .env.example .env.testing` For creating env file for your test development.
- Fill the database credentials at `.env.testing` file. **Note**: database credentials testing must different with main
  database credentials
- Run `php artisan test` for running both Feature Test and Unit Test.
- Happy Hacking!

## Add New Market
this project has two defaults market **Play Store** And **App Store**.
if you want to add new market must follow only one step:
- Add your new market name in `App\Enums\SubscriptionMarket.php`;

if you want to add all **helpers** and **schedule** and **testing** for your market follow these steps:
- Create your service for this market in `App\Services` directory.
- Create your controller for make mock http service for checking subscription status in `App\Http\Controllers\Api\V1` directory.
- Create your api route in `api.php` for calling method wrote inside controller.
- Create your command in `App\Console\Commands` for run in schedule, and for run command in background as schedule add your command to `App\Console\Kernel.php`
- Create your testcase in `Tests\Features` and `Tests\Unit` for run your testing.

**help**: all these **5-step** code, as same other market so only copy and paste it and change some initial value.

## License
The Business Logic is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
