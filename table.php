<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
</head>
<body>
    <?php
        $products = array(
            array("name"=>"Product A ", "price"=>10.50, "stock"=>12),
            array("name"=>"Product B ", "price"=>5.60, "stock"=>7),
            array("name"=>"Product C ", "price"=>7.00, "stock"=>5),
        );
    ?>
    <table border=1>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <tr>
            <td>Product A</td>
            <td>10.5</td>
            <td>12</td>
        </tr>
        <?php
            foreach($products as $p){
        ?>
            <tr>
                <td><?=$p["name"] ?></td>
                <td><?=$p["price"] ?></td>
                <td><?=$p["stock"] ?></td>
            </tr>
            <?php
            }
            ?>
    </table>
</body>
</html>