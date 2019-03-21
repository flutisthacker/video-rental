<?php 

//Oracle DB user name
$username = 'db_oracle';

// Oracle DB user password
$password = 'ruby';

// Oracle DB connection string
$connection_string = 'localhost/xe';

//Connect to an Oracle database
$connection = oci_connect(
 $username,
 $password,
 $connection_string
);

If (!$connection)
   echo 'Oops :( connection failed';
else
   echo 'Hooray !!! :) Oracle DB + php => OK ';

// Close connection 
oci_close($connection);

?>