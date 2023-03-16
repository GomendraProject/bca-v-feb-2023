<?php
require_once "../includes/functions.php";
require_once "../includes/Connection.php";

$connection = ConnectionHelper::getConnection();
// iterator based loop

function getProduct($productId)
{
    $connection = ConnectionHelper::getConnection();
    $statement =  $connection->prepare("SELECT * from product where id = :id");
    $statement->bindParam("id", $productId);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}

$productId = getParam("id");

if ($productId == null) {
    // error condition
    header("Location: /product");
}

$product = getProduct($productId);

if (!$product) {
    header("Location: /product");
}

if (isPost()) {
    $productName = $_POST["name"];
    $unit = $_POST["unit"];
    $purchaseRate = $_POST["purchase_rate"];

    $query = "UPDATE `product` SET name = :name, unit = :unit, purchase_rate =:purchaseRate where id = :id";

    $statement = $connection->prepare($query);

    $statement->bindParam("id", $productId);
    $statement->bindParam("name", $productName);
    $statement->bindParam("unit", $unit);
    $statement->bindParam("purchaseRate", $purchaseRate, PDO::PARAM_STR);

    $success = $statement->execute();

    if($success) {
        addSuccessMessage("Product updated");
    }
    else {
        addErrorMessage("Error updating product");
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
                    Update Product
                </h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name (*)</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?= $product["name"] ?>" required>
                </div>
                <div class="form-group">
                    <label for="unit">Unit (*)</label>
                    <input type="text" name="unit" id="unit" class="form-control" value="<?= $product["unit"] ?>" required>
                </div>
                <div class="form-group">
                    <label for="purchase_rate">Purchase Rate (*)</label>
                    <input type="number" step="any" name="purchase_rate" id="purchase_rate" class="form-control" value="<?= $product["purchase_rate"] ?>" required>
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
