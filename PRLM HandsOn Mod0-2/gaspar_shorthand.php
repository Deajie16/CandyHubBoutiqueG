<?php include "header.php"; ?>

<?php
$title = "Candy Hub – Shorthand Demo";

$candies = [
    ["name"=>"Gummy Bears","price"=>10,"img"=>"img/candy3.jpg"],
    ["name"=>"Cotton Candy Pops","price"=>25,"img"=>"img/candy4.jpg"],
];

$discount = 0;
$discount += 5;  // shorthand operator
?>

<h2><?= $title ?></h2>
<h3>Discount Applied: <?= $discount ?>%</h3>

<table>
<tr>
    <th>Image</th>
    <th>Candy</th>
    <th>Original Price</th>
    <th>Discounted Price</th>
</tr>

<?php foreach($candies as $c): ?>
<?php $final = $c['price'] - ($c['price'] * ($discount/100)); ?>
<tr>
    <td><img src="<?= $c['img'] ?>" width="80"></td>
    <td><?= $c['name'] ?></td>
    <td><?= $c['price'] ?></td>
    <td><?= number_format($final, 2) ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php include "footer.php"; ?>
