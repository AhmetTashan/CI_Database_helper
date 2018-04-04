# Codeigniter Database Config Helper
`New member of the old world`

Usage
-----
We add database tables and column names to the appication/config/config-table.php file.

We call the helper file where we want to use.

```
  $this->load->helper('config');
```

Simple use:
```php
  echo table('users');
  ## output: USERS
  
  echo table('users', 'username');
  ## output: USERS.USERNAME
  
  $select = array(
    array( 'users', 'fullname' ),
    array( 'users', 'pass', 'password' ),
    array( 'options', 'value', 'val' )
  );
  echo table( $select );
  ## output: USERS.FULL_NAME, USERS.PASSWORD AS password, OPTIONS.VALUE AS val
```

Example Mysql
-----
#### OPTIONS Table
```
+----------+-------------+----------------+
|       ID | NAME        | VALUE          |
+----------+-------------+----------------+
|        1 | HOME        | www.site.com   |
|        2 | SITENAME    | AHMETTASHAN    |
+----------+-------------+----------------+
```
#### USERS Table
```
+----------+-------------+----------------+----------------+
|       ID | USERNAME    | FULL_NAME      | PASSWORD       |
+----------+-------------+----------------+----------------+
|        1 | ahmet       | Ahmet Tashan   | 123456seven    |
|        2 | serdar      | Serdar Yalın   | 123456seven    |
|        3 | pland       | Phil Toland    | 123456seven    |
+----------+-------------+----------------+----------------+
```
