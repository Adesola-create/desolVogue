<?php
define("projectName", "personal project");

define("DB_NAME", "test");
define("DB_PASS", "");
define("DB_USER", "root");
define("DB_HOST", "localhost");

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// $users = $db->query("SELECT * FROM user WHERE status=1") or die("cannot select");
// while($row = mysqli_fetch_array($users)){
//     $num = mysqli_num_rows($users);
    
// }
// print_r($users);






?>