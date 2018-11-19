<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">Последние товары</h2>
    <?php foreach($productList as $productItem) : ?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="<? echo $productItem['image']; ?>" alt="" />
                    <h2><?php echo $productItem['price'] . '$'; ?></h2>
                    <a href="/product/<? echo $productItem['id']; ?>"><p>
                        <?php echo $productItem['name']; ?>]
                    </p>
                    </a>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div><!--features_items-->