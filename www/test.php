<?php  #test.php sandbox

define('DBNAME','onlinestore');
define('DBUSER','root');
define('DBPASS','vagrant');

$conn= new PDO ('mysql:host=localhost;dbname='.DBNAME, DBUSER,DBPASS);


?>
