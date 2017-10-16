<?php
//Step1
 $db = mysqli_connect('172.16.2.12','newuser','thisisthenewuser','tuber')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>
 
<?php
//Step2
$query = "SELECT * FROM table_name";
mysqli_query($db, $query) or die('Error querying database.');
?>

</body>
</html>
