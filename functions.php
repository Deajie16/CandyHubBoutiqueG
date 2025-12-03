<?php


declare(strict_types=1);


$tax_rate = 12; 


$candyStock = [
    "Lollipop Blast"      => ["price" => 12, "stock" => 30],
    "Caramel Crunch"      => ["price" => 22, "stock" => 8],
    "Strawberry Chews"    => ["price" => 15, "stock" => 5],
    "Chocolate Drops"     => ["price" => 20, "stock" => 18],
    "Gummy Bears"         => ["price" => 10, "stock" => 50],
    "Cotton Candy Pops"   => ["price" => 25, "stock" => 6],
    "Minty Fresh Bites"   => ["price" => 18, "stock" => 12]
];

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}


function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}


function get_tax_due(float $price, int $qty, int $rate = 0): float {
    $total = $price * $qty;
    return $total * ($rate / 100);
}
?>

<?php include "header.php"; ?>
<h2 class="section-title" style="color: #ff8eb8; font-weight: bold; text-decoration: none;">
    Stock Level Monitor
</h2>



<table>
<tr>
    <th>Candy</th>
    <th>Stock</th>
    <th>Reorder?</th>
    <th>Total Value (PHP)</th>
    <th>Tax Due (PHP)</th>
</tr>

<?php foreach($candyStock as $name => $c): ?>
<tr>
    <td><?= $name ?></td>
    <td><?= $c['stock'] ?></td>
    <td><?= get_reorder_message($c['stock']) ?></td>
    <td><?= number_format(get_total_value($c['price'], $c['stock']), 2) ?></td>
    <td><?= number_format(get_tax_due($c['price'], $c['stock'], $tax_rate), 2) ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php include "footer.php"; ?>
