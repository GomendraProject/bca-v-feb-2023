<?php
require_once "includes/functions.php";

if (isPost()) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // var_dump($username, $password);
    // die;

    // $_GET | $_POST

    // add to db

    
    // redirect 

    header("location: /layout.php");
}

?>

<?php
include_once "header.php";
?>
<div class="card">
    <div class="card-header">
        Add User
    </div>
    <div class="card-body">


        <form action="" method="post">
            <div class="form-group">
                <label for="username">
                    Username
                </label>
                <input type="text" name="username" id="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">
                    Password
                </label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <button class="btn btn-success mt-2">
                Save
            </button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>
                        SN
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        super.admin
                    </td>
                    <td>
                        <span class="badge badge-success">
                            Active
                        </span>
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">
                            Edit
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php
include_once "footer.php";
?>