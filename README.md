News-Blog Project
========================

This is test project


requirements: PHP5.6, MySQL5, Git, Composer

installation instructions:

1. Create projects folder

2. Go to the projects folder and execute command

#git clone https://github.com/Pachin-Alexey/news-blog.git

3. Configure a Web Server Virtual host accordingly to instructions

http://symfony.com/doc/current/setup/web_server_configuration.html

Project public folder is ./web/*

4. Create database `newsblog`

5. Under project root folder, run a command

#composer install

follow to the installation instructions.

6. Under project root folder, run a command

#php bin/console doctrine:schema:update --force

This command creates a database inner structure.

7. Under project root folder, run a command

#php bin/console doctrine:fixtures:load

This command will fill the tables by default values, like few blogs and default admin user.

default admin username is admin@example.com

default admin pass is admin

You can add new admins in ./src/BlogBundle/DataFixtures/ORM/DefaultUsers.php

then add new user into DB by command:

#php bin/console doctrine:fixtures:load --append