<?php
// return array(
//     'db' => array(
//         'connectionString' => 'mysql:host=localhost;dbname=thuctap;charset=utf8',
//         'emulatePrepare' => true,
//         'username' => 'thuctap',
//         'password' => 'thuctap',
//         'charset' => 'utf8',
//     )
#); ?>

<?php
$server = "localhost";
$user="thuctap";
$pass="thuctap";
$database="thuctap";
$conn=new mysqli($server,$user,$pass,$database);
mysqli_query($conn,'set names "utf8"') or die ("Connect Error!!!");
 #if($conn->connect_error){
 #   die("Error". $conn->connect_error);
 #}
 #echo "123";
?>

