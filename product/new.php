<?php
require_once "../includes/functions.php";
require_once "../includes/Connection.php";

$connection = ConnectionHelper::getConnection();
// iterator based loop

if(isPost()) {
    
    // Request Data Retrieval
    $productName = $_POST["name"];
    $unit = $_POST["unit"];
    $purchaseRate = $_POST["purchase_rate"];

    $query = "INSERT INTO `product`(`name`, `unit`, `purchase_rate`) VALUES (:name,:unit,:purchaseRate)";

    $statement = $connection->prepare($query);

    $statement->bindParam("name", $productName);
    $statement->bindParam("unit", $unit);
    $statement->bindParam("purchaseRate", $purchaseRate, PDO::PARAM_STR);

    $statement->execute();

    $result = $statement->rowCount();

    if($result > 0) {
        addSuccessMessage("Product added");
    }
    else {
        addErrorMessage("Error adding product");
    }
    header("Location: /product/index.php");
}

require_once "../header.php";
require_once "toolbox.php";
?>

<div class="row">
    <div class="col-4">
        <form action="" method="post" class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Add Product
                </h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name (*)</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="unit">Unit (*)</label>
                    <input type="text" name="unit" id="unit" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="purchase_rate">Purchase Rate (*)</label>
                    <input type="number" step="any" name="purchase_rate" id="purchase_rate" class="form-control" required>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

<?php
require_once "../footer.php";
