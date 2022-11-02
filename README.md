# Simple Todo App (Laravel)

#### Create Database and User
```mysql
CREATE database todos;

CREATE USER 'utodo'@'localhost' IDENTIFIED WITH mysql_native_password BY '360affiliate';

GRANT PRIVILEGE ON todos.* TO 'utodo'@'localhost';

FLUSH PRIVILEGES;
```