<?php
require_once "../header.php";
require_once "../includes/Connection.php";

$connection = ConnectionHelper::getConnection();

$query = "SELECT  * from product";

$statement = $connection->prepare($query);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// iterator based loop

?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Products
        </h5>
    </div>
    <div class="card-body">
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
