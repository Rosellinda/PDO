<?php

//to check if we install PDO extension
// print_r(PDO::getAvailableDrivers());

$host = "localhost";
$user = "root";
$password = "123456";
$dbname = "employee";

//data source name
$dsn = "mysql:host=$host;dbname=$dbname";

//create a PDO instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

//PDO query
$stmt = $pdo->query("SELECT * FROM userdata");



// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//     echo $row['first_name']." ".$row['last_name']. "<br/>";
// }

// while($row = $stmt->fetch(PDO::FETCH_OBJ)){
//     echo $row->first_name." ".$row->last_name. "<br/>";
// }

// while($row = $stmt->fetch()){
//     echo $row->first_name." ".$row->last_name. "<br/>";
// }

//prepared statements
//$sql = "SELECT * FROM userdata WHERE first_name = '$input'";
$gender = "female";

//Positional Paramenters
// $sql = "SELECT * FROM userdata WHERE gender = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$gender]);
// $users = $stmt->fetchAll();


// //Named Parameters
// $sql = "SELECT * FROM userdata WHERE gender = :gender";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['gender' => $gender]);
// $users = $stmt->fetchAll();

// foreach($users as $user){
//     echo $user->first_name." ".$user->last_name. " - ". $user->gender."<br/>";
// }

$id = 5;
//getting a single record
// $sql = "SELECT * FROM userdata WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]); //'id' kung anu nakalagay na name sa $sql
// $user = $stmt->fetch();
// echo $user->first_name;

//getting number of rows
// $sql = "SELECT * FROM userdata WHERE gender = :gender";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['gender' => $gender]);
// $userCount = $stmt->rowCount();
// echo $userCount;


// $firstname = "Gary";
// $lastname = "Valencia";
// $gender = "male"; 
// $email = "gary@email.com";

//INSERT
// $sql = "INSERT INTO userdata(first_name, last_name, gender, email) VALUE(:first_name,:last_name, :gender, :email)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['first_name' => $firstname, 'last_name' => $lastname, 'gender' => $gender, 'email' => $email]);
// echo $stmt->rowCount();

//UPDATE
// $firstname = "Gary";
// $lastname = "Valencia";
// $gender = "male"; 
// $email = "gary@email.com";
// $id = 1037;

// $sql = "UPDATE userdata SET first_name = :first_name";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['first_name' => $firstname, 'id' => $id]);
// echo $stmt->rowCount();

//DELETE POSITIONAL
// $firstname = "Gary";
// $lastname = "Valencia";
// $gender = "male"; 
// $email = "gary@email.com";
// $id = 1011;

// $sql = "DELETE FROM userdata WHERE id = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$id]);
// echo $stmt->rowCount();

//WILDCARDS
$search = "%as%"; // contains with AS
$sql = "SELECT * FROM userdata WHERE last_name LIKE ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$users = $stmt->fetchAll();
$userCount = $stmt->rowCount();
echo $userCount;

foreach($users as $user){
    echo $user->first_name." ".$user->last_name. " - ". $user->gender."<br/>";
}


