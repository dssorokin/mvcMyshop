<?php include(ROOT."/views/layouts/header.php"); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">

                        <?php foreach($categories as $item){ ?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="/php_learn/category/<?= $item['id']; ?>"><?= $item['name']; ?></a></h4>
                                </div>
                            </div>

                        <?php }?>



                    </div>

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                    <?php foreach($products as $product){ ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/php_learn/images/<?= $product['image']; ?>" alt="" />
                                        <h2><?= $product['price']; ?></h2>
                                        <p><?= $product['name']; ?></p>
                                        <a href="/php_learn/product/<?= $product['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>


                </div><!--features_items-->

                <!--                <div class="recommended_items"><!--recommended_items-->-->
                <!--                    <h2 class="title text-center">Рекомендуемые товары</h2>-->
                <!---->
                <!--                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">-->
                <!--                        <div class="carousel-inner">-->
                <!--                            --><?php //foreach($recomProducts as $product) {?>
                <!--                            <div class="item">-->
                <!--                                --><?php //for($i = 0; $i < 3; $i++) {?>
                <!--                                <div class="col-sm-4">-->
                <!--                                    <div class="product-image-wrapper">-->
                <!--                                        <div class="single-products">-->
                <!--                                            <div class="productinfo text-center">-->
                <!--                                                <img src="/php_learn/images/--><?//= $product['image']; ?><!--" alt="" />-->
                <!--                                                <h2>--><?//= $product['price']; ?><!--</h2>-->
                <!--                                                <p>--><?//= $product['name']; ?><!--</p>-->
                <!--                                                <a href="/php_learn/product/--><?//= $product['id']; ?><!--" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>-->
                <!--                                            </div>-->
                <!---->
                <!--                                        </div>-->
                <!--                                    </div>-->
                <!--                                </div>-->
                <!--                               --><?php //} ?>
                <!--                            </div>-->
                <!---->
                <!--                            --><?php //} ?>
                <!---->
                <!--                        </div>-->
                <!--                        <a class="left recommended-item-control" href="/php_learn/template/#recommended-item-carousel" data-slide="prev">-->
                <!--                            <i class="fa fa-angle-left"></i>-->
                <!--                        </a>-->
                <!--                        <a class="right recommended-item-control" href="/php_learn/template/#recommended-item-carousel" data-slide="next">-->
                <!--                            <i class="fa fa-angle-right"></i>-->
                <!--                        </a>-->
                <!--                    </div>-->
                <!--                </div><!--/recommended_items-->-->

            </div>
        </div>
    </div>
</section>
<?php include(ROOT."/views/layouts/footer.php"); ?>
