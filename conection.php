<?php
#database connectivity for xampp on mysqli.
#mysqli_connect('hostname','username','password','databasename');
$con=mysqli_connect('localhost','root','','fashion2basket_db')or die('No conection found');


#database connectivity for wamp on mysql.
//mysql_connect('localhost','root','')or die('No conection found');
//mysql_select_db('fashion2basket_db')or die('No database found');

?>