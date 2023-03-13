<?php

function isPost() {
    return $_SERVER["REQUEST_METHOD"] === "POST";
}

if(isPost()) {
    $username = $_POST["username"];

    // add to db
    
    // redirect

    header("location: /");
}

?>

<?php
include_once "header.php";
?>
    <form action="" method="post">
        <input type="text" name="username">
        <button class="btn btn-success">
            Save
        </button>
    </form>
<?php
include_once "footer.php";
?>