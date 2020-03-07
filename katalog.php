<?php 


    require_once "config/db.php";
    require_once "tamplate/header.php";


    $query = "SELECT *  FROM `products`";
    $result = mysqli_query($conn, $query);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<?php 
    require_once "tamplate/header.php";
?>

    <div class="container">
    <? foreach ($products as $key => $product): ?>
    <h1 class="center">Каталог:</h1>
    <div class="center">
    <div class="card" style="width: 50rem;">
        <img src="<?= $product['img'] ?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name']?></h5>
            <p class="card-text"><?php echo $product ['description']; ?></p>
            <a href="" class="btn btn-primary"><?php echo $product['price']; ?></a>
        </div>
    </div>
</div>
<? endforeach; ?>

</div>

</body>
</html>



