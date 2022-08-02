<?php  


require('connect.php');


/*$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
*/




function selectAll($table)
{
global $conn;  
$sql = "SELECT * FROM table";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
return $records;

}
$users = selectAll('users');
echo "<pre>", print_r($users), "</pre>";