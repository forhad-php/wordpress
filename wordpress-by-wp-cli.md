✔ https://make.wordpress.org/cli/handbook/installing/#installing-on-windows

✔ First of all set 'Environment variable' paths: (System variables)
- C:\wp-cli
- C:\xampp\php
- C:\xampp\mysql\bin

✔ Download wp-cli.phar manually and save it to a folder, for example c:\wp-cli

✔ Create a file named wp.bat in c:\wp-cli with the following contents:

@ECHO OFF
php "c:/wp-cli/wp-cli.phar" %*

✔ Create another file wp without any extension into the C:\wp-cli\ directory and paste below code:

Note: See the 'wp' file

✔ https://www.hongkiat.com/blog/wordpress-command-line/

✔ wp core download

✔ wp config create --dbname=newwp --dbuser=root --dbpass=

To create a database by command line
✔ mysql --host=localhost --user=root -p
✔ --create the newwp database
✔ create database newwp;

✔ wp core install --url=http://localhost/newWP/ --title="The title" --admin_user=admin --admin_password=admin --admin_email=demo@demo.com

Install a plugin with activate:
✔ wp plugin install bbpress --activate
