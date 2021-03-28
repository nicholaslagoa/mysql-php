#### mysql-php

***

mysql-php is a webapp that demonstrates the interaction of PHP with any database software using the class PDO via OOP. At the moment, the app is at a very *raw* state as there's no user-friendly interface, but at least it works!

#### Dependencies

***

XAMPP Version:

``` 7.4.12```

Respective PHP Version:

```7.4.12```

#### Execution

***

Clone or download the repo folder, put it over your webserver localhost/VirtualHost folder(as I used XAMPP, the folder is htdocs over its root) and start it. For this app and its dependencies, i used Apache and MySQL as the applications for the app to run correctly. Over the *src/Blog.php* file you can change at the line 9 which database-type you would like to use, the host, the database name that you'll be using and the credentials for your local server. You also need to create a table named **posts** for your database with the following fields to work properly:

* ```id int(12) NOT NULL AUTO_INCREMENT```, which also is the ```PRIMARY KEY (id)```
* ```descricao varchar(80)```
* ```autor varchar(20)```

After that, as i said the app-management is a little bit raw as i use the $_GET function to know which of the CRUD operations that the user wants to use, so to access its operations go to your URL and type, after the bit that says ```...\mysql-php\index.php``` you'll want to put a "?operation=x" after .php, where x would be one of the operations: *list, insert, updDescricao, updAutor* or *delete*. You can alter the values that you want to add on the database in ```index.php``` over its respective functions under the *switch* statement.

XAMPP download: https://xampp.br.uptodown.com/windows/versions. For information regards VirtualHost you can read it here: https://www.cloudways.com/blog/configure-virtual-host-on-windows-10-for-wordpress/

As i used Windows for all the development, webserver management via other OS's may be set on other applications.