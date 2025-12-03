<?php include "header.php"; ?>

<?php
$title = "Candy Hub – Variables Demo";

 
$candies = [
    ["name"=>"Strawberry Chews","price"=>15,"img"=>"img/candy1.jpg"],
    ["name"=>"Chocolate Drops","price"=>20,"img"=>"img/candy2.jpg"],
    ["name"=>"Gummy Bears","price"=>10,"img"=>"img/candy3.jpg"],
    ["name"=>"Cotton Candy Pops","price"=>25,"img"=>"img/candy4.jpg"],
    ["name"=>"Minty Fresh Bites","price"=>18,"img"=>"img/candy6.jpg"],
];
?>

<h2><?php echo $title; ?></h2>

<table>
<tr>
    <th>Image</th>
    <th>Candy Name</th>
    <th>Price</th>
    <th>Status</th>
</tr>

<?php foreach($candies as $c): ?>
<tr>
    <td><img src="<?= $c['img'] ?>" width="80"></td>
    <td><?= $c['name'] ?></td>
    <td><?= $c['price'] ?></td>

 
    <td>
        <?php 
            if($c['price'] < 15){
                echo "<span class='cheap'>On Sale!</span>";
            } else {
                echo "<span class='regular'>Regular Price</span>";
            }
        ?>
    </td>
</tr>
<?php endforeach; ?>
</table>

<?php include "footer.php"; ?>

