<?php
include_once Root . '/views/Layout/header.php';
?>
<section>
    <div class="container">
        <div class="row">
			<? include_once Root . '/views/Layout/catalog.php'; ?>
            <div class="col-sm-9 padding-right">
              <? include_once Root . '/views/Layout/featuresItems.php'; ?>  
            </div>
        </div>
    </div>
</section>
<?php
include_once Root . '/views/Layout/footer.php';
?>
