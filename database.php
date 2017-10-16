<?php
//Step1
 $db = mysqli_connect('my_laptop_ip_address','user_name','password','tubur')
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
