<?php include "header.php"; ?>

<?php
$title = "Candy Hub – Operators Demo";

$candies = [
    ["name"=>"Lollipop Blast","price"=>12,"img"=>"img/candy5.jpg"],
    ["name"=>"Caramel Crunch","price"=>22,"img"=>"img/candy7.jpg"],
];

$tax = 0.12;  
?>

<h2><?= $title ?></h2>

<table>
<tr>
    <th>Candy</th>
    <th>Base Price</th>
    <th>Tax Added</th>
    <th>Total</th>
</tr>

<?php foreach($candies as $c): ?>
<?php 
    $vat = $c['price'] * $tax;
    $total = $c['price'] + $vat;
?>
<tr>
    <td><?= $c['name'] ?></td>
    <td><?= $c['price'] ?></td>
    <td><?= number_format($vat, 2) ?></td>
    <td><?= number_format($total, 2) ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php include "footer.php"; ?>
