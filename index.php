<?php 

    require_once "config/db.php";
    require_once "tamplate/header.php";

    $query = "SELECT *  FROM `products`";
    $result = mysqli_query($conn, $query);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($products);

    var_dump($mysqli);
?>





      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://cdn57.androidauthority.net/wp-content/uploads/2019/10/oneplus-7t-pro-5g-mclaren-edition-1.jpg" class="kartinka" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://fossbytes.com/wp-content/uploads/2019/05/OnePlus-7-pro.png" class="kartinka" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.tabletowo.pl/wp-content/uploads/2019/09/oneplus-7t.jpg" class="kartinka" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Назад</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Далее</span>
        </a>
      </div>

      <div class="center">
      <a href="http://s.loc/katalog.php"><button type="button" class="btn btn-outline-light btn-lg">Перейти к каталогу</button></a>
      </div>

      <?php 
          echo($array[1])
      ?>
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>