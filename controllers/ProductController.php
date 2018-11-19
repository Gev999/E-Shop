<?php
class ProductController {

	public function actionView($id) {
		$categoryList = array();
		$categoryList = Category::getCategoryList();
		$product = array();
		$product = Product::getProductById($id);
		require_once Root . '/views/Product/view.php';
		return TRUE;
	}

}
?>