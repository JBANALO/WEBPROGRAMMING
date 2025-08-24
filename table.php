<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $products = array(
            array("no."=>1,"name"=>"Product A ", "price"=>10.50, "stock"=>12),
            array("no."=>2,"name"=>"Product B ", "price"=>5.60, "stock"=>7),
            array("no."=>3,"name"=>"Product C ", "price"=>7.00, "stock"=>5),
            array("no."=>4,"name"=>"Product D ", "price"=>15, "stock"=>10),
            array("no."=>5,"name"=>"Product E ", "price"=>16, "stock"=>15),
            array("no."=>6,"name"=>"Product F ", "price"=>11, "stock"=>18),
        );
    ?>
    <table border=1>
        <tr>
            <th>No.</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Product A</td>
            <td>10.5</td>
            <td>12</td>
        </tr>
        <?php
            foreach($products as $p){
        ?>
            <tr>
                <td><?=$p["no."] ?></td>
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