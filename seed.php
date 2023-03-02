<?php
require_once 'includes/Connection.php';

$defaultUsername = "super.admin";

$connection = ConnectionHelper::getConnection();

// Prepare a statement
$queryStatement = $connection->prepare("SELECT count(*) FROM `user` where Username = :username");

// bind params. Params are prepended with : in queries. ex: :username in above query
$queryStatement->bindParam("username", $defaultUsername, PDO::PARAM_STR);

// execute the query
$queryStatement->execute();

// Get results
$result = $queryStatement->fetchColumn();

if($result == 0) {
    $defaultPasswordHash = password_hash("Admin@123", PASSWORD_BCRYPT);
    $addStatement = $connection->prepare("INSERT INTO `user` (Username, Password) VALUES (:username, :password) ");
    $addStatement->bindParam("username", $defaultUsername);
    $addStatement->bindParam("password", $defaultPasswordHash);
    $addStatement->execute();
    if($addStatement->rowCount() > 0) {
        echo "User seeding complete";
    }
}
else {
    echo "User already exists";
}

$users = getUsers();

echo "<hr/>";
echo "<h5> All users </h5>";

foreach($users as $user) {
    echo "Username: {$user['Username']} <br/>";
}

function getUsers() {
    $connection = ConnectionHelper::getConnection();
    $statement = $connection->prepare("SELECT * FROM `user` order by Id");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}