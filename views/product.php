<?php include 'layouts/header.php'; ?>

<?php if($product != null): ?>

<ul class="list-group">
  <li class="list-group-item"><?php echo $product['id']; ?></li>
  <li class="list-group-item"><?php echo $product['title']; ?></li>
  <li class="list-group-item"><?php echo $product['description']; ?></li>
  <li class="list-group-item"><?php echo $product['price']; ?></li>
  <li class="list-group-item"><?php echo $product['sku']; ?></li>
  <li class="list-group-item"><?php echo $product['image']; ?></li>
</ul>

<?php else: ?>
    <h1> Not a valid product </h1>
<?php endif ?>

<?php include 'layouts/footer.php'; ?>