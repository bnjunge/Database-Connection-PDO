## Simple PDO MYSQL Database Connection
This file helps you to connect to a mysql database using PDO.

#### How to use

```php
<?php

# populate your database details
$dbname = '';
$dbuser = '';
$dbhost = '';
$dbpass = '';

```

#### Test Connection
Place the file to your host and navigate to it on the browser

if on localhost and you created a folder say db, open ```localhost/db/connect.pdo.php```

You should see ```Connected``` if you database details are correct or ```Error: ERROR DESCRIPTION``` if was not successful.

Incase of a successful connection, your database connection is ready for use.

### Performing CRUD operations

### Select
Table name: ```test```, database ```mysql```

```php
<?php

$get_data = $conn->prepare("SELECT * FROM test");
$get_data->execute();

// get results 
$results = $get_data->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($results);
echo "</pre>";
```

### Save
```php
<?php
$save_data = $conn->prepare("INSERT INTO test(username, password) VALUES(:username, :password)");
$save_data->execute([':username' => 'test@user.com', ':password' => '1234567']);

// return inserted records
$echo $save_data->rowCount() . "Rows inserted";
```

### Delete
```php
<?php

$delete = $conn->prepare("DELETE FROM test WHERE userid = :userid");
$delete->execute([':userid' => 1]);

echo $delete->rowCount() . " rows deleted";
```

### Update
```php
<?php

$update = $conn->prepare("UPDATE test SET password = :password WHERE userid = :userid");
$update->execute([':password' => '122334455', ':userid' => 2]);

echo $update->rowCount() . " rows have been updated";

```


#### Want to contibute something?
Feel free to create a PR