# Track my Games

This project aims to help people manage their games library, and games progession with their backlog.

##How to install this project ?
1. Clone this project
2. Run `composer install`
3. Run `yarn install`
4. Create a copy of `env` file named `env.local`
5. In `env.local`, go to  line #27 and fill informations with your MYSQL data
   ('DATABASE_URL="mysql://your_mysql_username:your_password@127.0.0.1:3306/your_database_name"')
6. Run `php bin/console doctrine:database:create`
7. Run `php bin/console doctrine:schema:update --force`
8. Run `php bin/console doctrine:fixtures:load`