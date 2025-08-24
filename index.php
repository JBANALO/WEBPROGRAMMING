<html>
    <body>
        <h1>hello from, josie banalo</h1>
        <h3>MY FIRST PHP PROGRAM</h3>
    </body>
</html>

<?php 
    echo "hello world";
    $x = 15;
    $y = 3;
    $sum = $x + $y;
    echo "The sum is $sum";
?>
<br>
<?php
    $x = 15;
    $y = 3;
    $sum = $x + $y;
    echo "The sum is $sum.";
?>
<?php
    $x = 10;
    $y = 20;
    if ($x > $y) {
        echo "$x is greater than $y";
    } elseif($x < $y) {
        echo "$x is less than $y";
    } else {
        echo "$x is equal to $y";
    }

?>
<?php
    for($i = 1; $i <= 10; $i++){
        echo "$i <br>";
    }
?>


<?php
    $products = array("Product A", "Product B", "Product C");
    var_dump($products);
?>

<?php
    $products = array("Product A", "Product B", "Product C");
    echo $products[0];
?>

<?php
    $products = array("Product A", "Product B", "Product C");
    $products[1] = "Product D";
    var_dump($products);
?>

<?php
    $products = array("Product A", "Product B", "Product C");
    foreach($products as $p){
        echo "p <br>";
    }
?>

<?php
    $products = array("name"=>"Product A", "price"=>10.50, "Stock"=>12);
    echo $products["name"];
?>

<?php
    $products = array(
        array("name"=>"Product A ", "price"=>10.50, "Stock"=>12),
        array("name"=>"Product B ", "price"=>5.60, "Stock"=>7),
        array("name"=>"Product C ", "price"=>7.00, "Stock"=>5),
    );
    foreach($products as $p){
        echo $p["name"] . "is " . $p["price"] . " pesos <br>";
    }
    
?>
    
?>
