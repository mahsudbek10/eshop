<!DOCTYPE php>
<html lang="en">
    <?php
    $project = "/P3";
    if ($_SERVER['REQUEST_URI'] == "$project/index.php"):
        header("Location: index");
    else: require_once 'head.php';
        require './db/db.php';
        ?>
        <section id="slider"><!--slider-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php
                                $caroosel = R::getAll("SELECT * FROM caroosel");
                                $i = 0;
                                foreach ($caroosel as $c):
                                    ?>
                                    <li data-target="#slider-carousel" data-slide-to="<?= $i; ?>" class="<?= ($i == 0) ? "active" : ""; ?>"></li>
                                <?php endforeach; ?>
                            </ol>

                            <div class="carousel-inner">
                                <?php
                                $i = 0;
                                foreach ($caroosel as $c):
                                    ?>
                                    <div class="item <?= ($i == 0) ? "active" : ""; ?>">
                                        <div class="col-sm-6">
                                            <h1><span>E</span>-SHOPPER</h1>
                                            <h2><?= $c['name'] ?></h2>
                                            <p><?= $c['description'] ?></p>
                                            <a href="<?= $c['link'] ?>" class="btn btn-default get">Get it now</a>
                                        </div>
                                        <div class="col-sm-6">
                                            <div style="height: 250px">
                                            <?= $c['imagee'] ?>
                                            </div>
                                            <!--<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />-->
                                            <img src="images/home/pricing.png"  class="pricing" alt="" />
                                        </div>
                                    </div>
                                    <?php $i++;
                                endforeach; ?>
                            </div>
                            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section><!--/slider-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Категории</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Sportswear
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="sportswear" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Nike </a></li>
                                                <li><a href="#">Under Armour </a></li>
                                                <li><a href="#">Adidas </a></li>
                                                <li><a href="#">Puma</a></li>
                                                <li><a href="#">ASICS </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Mens
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="mens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Fendi</a></li>
                                                <li><a href="#">Guess</a></li>
                                                <li><a href="#">Valentino</a></li>
                                                <li><a href="#">Dior</a></li>
                                                <li><a href="#">Versace</a></li>
                                                <li><a href="#">Armani</a></li>
                                                <li><a href="#">Prada</a></li>
                                                <li><a href="#">Dolce and Gabbana</a></li>
                                                <li><a href="#">Chanel</a></li>
                                                <li><a href="#">Gucci</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Womens
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="womens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Fendi</a></li>
                                                <li><a href="#">Guess</a></li>
                                                <li><a href="#">Valentino</a></li>
                                                <li><a href="#">Dior</a></li>
                                                <li><a href="#">Versace</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Kids</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Fashion</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Households</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Interiors</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Clothing</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Bags</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Shoes</a></h4>
                                    </div>
                                </div>
                            </div><!--/category-products-->

                            <div class="brands_products"><!--brands_products-->
                                <h2>Brands</h2>
                                <div class="brands-name">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                        <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                        <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                        <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                        <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                        <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                        <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                    </ul>
                                </div>
                            </div><!--/brands_products-->

                            <div class="price-range"><!--price-range-->
                                <h2>Price Range</h2>
                                <div class="well text-center">
                                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                    <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                                </div>
                            </div><!--/price-range-->

                            <div class="shipping text-center"><!--shipping-->
                                <img src="images/home/shipping.jpg" alt="" />
                            </div><!--/shipping-->

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--new-->
                            <h2 class="title text-center">Новинки</h2>
                            <?php $future = R::getAll("SELECT id, name, description, imagee, price FROM view_shopping ORDER BY date_register DESC LIMIT 6"); foreach ($future as $f): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <div style="height: 60px;">
                                                <?= $f['imagee']; ?>
                                            </div>
                                            
                                            <!--<img src="images/home/product4.jpg" alt="" />-->
                                            <h2><?= $f['price']; ?> тг</h2>
                                            <p><?= $f['description']; ?></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?= $f['price']; ?> тг</h2>
                                                <p><?= $f['description']; ?></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                            </div>
                                        </div>
                                        <img src="images/home/new.png" class="new" alt="" />
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Добавить в список желаний</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Добавить к сравнению</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div><!--new-->

                        <div class="category-tab"><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#classic" data-toggle="tab">Классика</a></li>
                                    <li><a href="#jeans" data-toggle="tab">Джинсы</a></li>
                                    <li><a href="#tshirts" data-toggle="tab">Футболки</a></li>
                                    <li><a href="#bags" data-toggle="tab">Сумки</a></li>
                                    <li><a href="#shoe" data-toggle="tab">Туфля</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="classic" >
                                    <?php $tab = R::getAll("SELECT id, name, description, imagee, price FROM view_shopping WHERE typee2_id = 9 OR typee2_id = 10 ORDER BY date_register ASC"); foreach ($tab as $t): ?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
<!--                                                    <img src="images/home/gallery1.jpg" alt="" />-->
                                                    <?= $t['imagee']; ?>
                                                    <h2><?= $t['price']; ?> тг</h2>
                                                    <p><?= $t['name']; ?></p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="tab-pane fade" id="jeans" >
                                    <?php $tab = R::getAll("SELECT id, name, description, imagee, price FROM view_shopping WHERE typee2_id = 9 OR typee2_id = 10 ORDER BY date_register ASC"); foreach ($tab as $t): ?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
<!--                                                    <img src="images/home/gallery1.jpg" alt="" />-->
                                                    <?= $t['imagee']; ?>
                                                    <h2><?= $t['price']; ?> тг</h2>
                                                    <p><?= $t['name']; ?></p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="tab-pane fade" id="tshirts" >
                                    <?php $tab = R::getAll("SELECT id, name, description, imagee, price FROM view_shopping WHERE typee2_id = 9 OR typee2_id = 10 ORDER BY date_register ASC"); foreach ($tab as $t): ?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
<!--                                                    <img src="images/home/gallery1.jpg" alt="" />-->
                                                    <?= $t['imagee']; ?>
                                                    <h2><?= $t['price']; ?> тг</h2>
                                                    <p><?= $t['name']; ?></p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="tab-pane fade" id="bags" >
                                    <?php $tab = R::getAll("SELECT id, name, description, imagee, price FROM view_shopping WHERE typee2_id = 9 OR typee2_id = 10 ORDER BY date_register ASC"); foreach ($tab as $t): ?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
<!--                                                    <img src="images/home/gallery1.jpg" alt="" />-->
                                                    <?= $t['imagee']; ?>
                                                    <h2><?= $t['price']; ?> тг</h2>
                                                    <p><?= $t['name']; ?></p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="tab-pane fade" id="shoe" >
                                    <?php $tab = R::getAll("SELECT id, name, description, imagee, price FROM view_shopping WHERE typee2_id = 9 OR typee2_id = 10 ORDER BY date_register ASC"); foreach ($tab as $t): ?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
<!--                                                    <img src="images/home/gallery1.jpg" alt="" />-->
                                                    <?= $t['imagee']; ?>
                                                    <h2><?= $t['price']; ?> тг</h2>
                                                    <p><?= $t['name']; ?></p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div><!--/category-tab-->

                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">Мы рекомендуем</h2>
                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                    <?php $recommend = R::getAll("SELECT id, name, description, imagee, price FROM view_shopping ORDER BY date_register ASC LIMIT 3"); foreach ($recommend as $r): ?>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <!--<img src="images/home/recommend1.jpg" alt="" />-->
                                                        <?= $r['id']; ?>
                                                        <h2><?= $r['price']; ?> тг</h2>
                                                        <p><?= $r['description']; ?></p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                    </div>
                                                    <img src="images/home/sale.png" class="new" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                    <div class="item">
                                    <?php $recommend = R::getAll("SELECT id, name, description, imagee, price FROM view_shopping ORDER BY date_register ASC LIMIT 3, 3"); foreach ($recommend as $r): ?>
                                    	<div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <!--<img src="images/home/recommend1.jpg" alt="" />-->
                                                        <?= $r['id']; ?>
                                                        <h2><?= $r['price']; ?> тг</h2>
                                                        <p><?= $r['description']; ?></p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                    </div>
                                                    <img src="images/home/sale.png" class="new" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                    <div class="item">
                                    <?php $recommend = R::getAll("SELECT id, name, description, imagee, price FROM view_shopping ORDER BY date_register ASC LIMIT 6, 3"); foreach ($recommend as $r): ?>
                                    	<div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <!--<img src="images/home/recommend1.jpg" alt="" />-->
                                                        <?= $r['id']; ?>
                                                        <h2><?= $r['price']; ?> тг</h2>
                                                        <p><?= $r['description']; ?></p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                    </div>
                                                    <img src="images/home/sale.png" class="new" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                    <div class="item">
                                    <?php $recommend = R::getAll("SELECT id, name, description, imagee, price FROM view_shopping ORDER BY date_register ASC LIMIT 9, 3"); foreach ($recommend as $r): ?>
                                    	<div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <!--<img src="images/home/recommend1.jpg" alt="" />-->
                                                        <?= $r['id']; ?>
                                                        <h2><?= $r['price']; ?> тг</h2>
                                                        <p><?= $r['description']; ?></p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                    </div>
                                                    <img src="images/home/sale.png" class="new" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>			
                            </div>
                        </div><!--/recommended_items-->

                    </div>
                </div>
            </div>
        </section>


    <?php require_once 'footer.php'; ?>
    </body>
<?php endif; ?>
</html>