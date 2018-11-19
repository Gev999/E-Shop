<?php
include_once Root . '/views/Layout/header.php';
?>
<section>
    <div class="container">
        <div class="row">
            <? include_once Root . '/views/Layout/catalog.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src= "<? echo $product['image']; ?>" alt="" /> 
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->
                                <img src="/templates/images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><? echo $product['name']; ?></h2>
                                <p>
                                    Код товара: <? echo $product['code']; ?>                                
                                </p>
                                <span> <span>US $<? echo $product['price'];?></span> <label>Количество:</label>
                                    <input type="text" value="3" />
                                    <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        В корзину
                                    </button> </span>
                                <p>
                                    <b>Наличие:</b> На складе
                                </p>
                                <p>
                                    <b>Состояние:</b> Новое
                                </p>
                                <p>
                                    <b>Производитель:</b> <? echo $product['brand']; ?>
                                </p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Описание товара</h5>
                            <p>
                                <? echo $product['description']; ?>
                            </p>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<br/>
<br/>

<?php
include_once Root . '/views/Layout/footer.php';
?>
