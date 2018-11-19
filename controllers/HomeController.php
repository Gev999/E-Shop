<?php
class HomeController {

	public function actionIndex() {

		$categoryList = array();
		$categoryList = Category::getCategoryList();
		$productList = array();
		$productList = Product::getProductList();
		require_once Root . '/views/Home/index.php';
		return TRUE;
	}
}
?>