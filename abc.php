<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Start PHP Segment
// Any code here is interpreted by PHP

// variable
$abc = 78;
$dg = "Something";

if($abc == 78)
{
    ?>
        <h1> ABC is 78 </h1>
        <h1> ABC is 78 </h1>
        <h1> ABC is 78 </h1>
        <h1> ABC is 78 </h1>
        <h1> ABC is 78 </h1>
        <h1> ABC is 78 </h1>
        <table>
            <thead></thead>
            <tbody>
                <tr>
                    <td>SN</td>
                    <td>SN</td>
                    <td>SN</td>
                    <td>SN</td>
                    <td>SN</td>
                    <td>SN</td>
                </tr>
            </tbody>
        </table>
    <?php
}
else
{
    ?>
    <h4>
        Not 78
    </h4>
    <?php
}

if($abc == 78):
    ?>
        <h1> ABC is 78 </h1>
        <h1> ABC is 78 </h1>
        <h1> ABC is 78 </h1>
        <h1> ABC is 78 </h1>
        <h1> ABC is 78 </h1>
        <h1> ABC is 78 </h1>
        <table>
            <thead></thead>
            <tbody>
                <tr>
                    <td>SN</td>
                    <td>SN</td>
                    <td>SN</td>
                    <td>SN</td>
                    <td>SN</td>
                    <td>SN</td>
                </tr>
            </tbody>
        </table>
    <?php
endif;

?>

?>
    
</body>
</html>