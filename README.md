# Admin Panel - Laves Management using CodeIgniter
#####Admin Panel - User Management Demo using CodeIgniter + AdminLTE Bootstrap Theme

The code is uploaded to demonstrate the simple role based Admin Panel application using CodeIgniter(MVC Framework)

## Installation

Download the code from repository.
Unzip the zip file.

Open browser; goto [localhost/phpmyadmin](http://localhost/phpmyadmin).

Create a database with name "cias" and import the file "cias.sql" in that database.

Copy the remaining code into your root directory:

for example, for windows

**WAMP : c:/wamp/www/--Your project Name --**

OR

**XAMPP : c:/xampp/htdocs/-Your project Name **

Open browser; goto [localhost/cias](http://localhost/ Your project Name ) and press enter:

The login screen will appear.

To login, I am going to provide the user-email ids and password below.

**System Administrator Account :**

email : admin@gmail.com.com

password : Admin@123

**Manager Account :**

email :  manager@gmail.com

password : Manager@123

**Employee Account :**

email : employee@gmail.com

password : Employee@123

Once you logged in with System Administrator account, you can create user or edit previous user if you want.

**Youtube Links :**

[CodeIgniter Admin Panel Demo](https://www.codeigniter.com/userguide3/installation/index.html) : This video contain the demo of CodeIgniter Admin Panel.

[How to setup CodeIgniter Admin Panel](https://www.codeigniter.com/userguide3/installation/index.html) : This video contain the procedure of setting up CodeIgniter Admin Panel.


**After login "loginMe" controller is not found : ISSUE**

Lot of people raising this issue, I resolved it 4-5 times for every user. People are not searching for closed issues. Thats why I am going to put this here.

How to get over this issue?

1) enable mod_rewrite.dll (or mod_rewrite.so) by removing leading # in httpd.conf.
2) After that, follow this solution https://stackoverflow.com/questions/24472349/htaccess-doesnt-work-on-xampp-windows-7

