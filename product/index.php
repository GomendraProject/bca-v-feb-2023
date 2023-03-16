<?php
require_once "../includes/functions.php";
require_once "../includes/Connection.php";

$connection = ConnectionHelper::getConnection();

$searchName = getParam("name");
$searchUnit = getParam("unit");

// dd([
//     $searchName,
//     $searchUnit
// ]);

$query = "SELECT  * from product where (:name is null or name like CONCAT('%',:name, '%')) and (:unit is null or unit = :unit) ";

$statement = $connection->prepare($query);

$statement->bindParam("name", $searchName);
$statement->bindParam("unit", $searchUnit);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// iterator based loop

require_once "../header.php";

require_once "toolbox.php";
?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Products
        </h5>
    </div>
    <div class="card-body">

        <form action="">
            <div class="row align-items-end">
                <div class="col-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="<?= $searchName ?>">
                </div>
                <div class="col-3">
                    <label for="">Unit</label>
                    <input type="text" name="unit" class="form-control" value="<?= $searchUnit ?>">
                </div>
                <div class="col-3">
                    <button class="btn btn-primary">
                        Search
                    </button>
                </div>
            </div>
        </form>

        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th>Sn</th>
                    <th>
                        Name
                    </th>
                    <th>
                        Unit
                    </th>
                    <th>
                        Purchase Rate
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sn = 0;
                foreach ($result as $product) :
                ?>
                    <tr>
                        <td>
                            <?= ++$sn; ?>
                        </td>
                        <td>
                            <?= $product["name"] ?>
                        </td>
                        <td>
                            <?= $product["unit"] ?>
                        </td>
                        <td>
                            <?= $product["purchase_rate"] ?>
                        </td>
                        <td>
                            <a href="/product/edit.php?id=<?= $product['id'] ?>" class="btn btn-info">
                                Edit
                            </a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once "../footer.php";
