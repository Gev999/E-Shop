<?php
include_once Root . '/views/Layout/header.php';
?>
<section>
    <div class="container">
        <div class="row">
			<? include_once Root . '/views/Layout/catalog.php'; ?>
            <div class="col-sm-9 padding-right">
                <? include_once Root . '/views/Layout/featuresItems.php'; ?>
                <div class="recommended_items">
                    <!--recommended_items-->
                    <h2 class="title text-center">Рекомендуемые товары</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="/templates/images/home/recommend1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>
                                                    Easy Polo Black Edition
                                                </p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="/templates/images/home/recommend2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>
                                                    Easy Polo Black Edition
                                                </p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="/templates/images/home/recommend3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>
                                                    Easy Polo Black Edition
                                                </p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="/templates/images/home/recommend1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>
                                                    Easy Polo Black Edition
                                                </p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="/templates/images/home/recommend2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>
                                                    Easy Polo Black Edition
                                                </p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="/templates/images/home/recommend3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>
                                                    Easy Polo Black Edition
                                                </p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev"> <i class="fa fa-angle-left"></i> </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next"> <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
<?php
include_once Root . '/views/Layout/footer.php';
?>
