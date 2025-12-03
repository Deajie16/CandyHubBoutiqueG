<?php include "header.php"; ?>

<?php
$title = "Candy Hub – Type Juggling Demo";

$candies = [
    ["name"=>"Strawberry Chews","price"=>"15","img"=>"img/candy1.jpg"],
    ["name"=>"Chocolate Drops","price"=>"20","img"=>"img/candy2.jpg"],
];

$addedValue = 5;  
?>

<h2><?= $title ?></h2>
<h3>Automatic: STRING Price + INT (<?= $addedValue ?>)</h3>

<table>
<tr>
    <th>Candy</th>
    <th>Original Price (string)</th>
    <th>Added Value</th>
    <th>Final Price</th>
</tr>

<?php foreach($candies as $c): ?>
<?php $final = $c['price'] + $addedValue; ?>
<tr>
    <td><?= $c['name'] ?></td>
    <td><?= $c['price'] ?></td>
    <td><?= $addedValue ?></td>
    <td><?= $final ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php include "footer.php"; ?>
