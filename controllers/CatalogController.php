<?php
class CatalogController {

	public function actionIndex() {
		$categoryList = array();
		$categoryList = Category::getCategoryList();
		$productList = array();
		$productList = Product::getProductList();
		require_once Root . '/views/Catalog/index.php';
		return TRUE;
	}

	public function actionCategory($id) {
		$categoryList = array();
		$categoryList = Category::getCategoryList();
		$catalog = array();
		$catalog = Category::getCatalogById($id);
		require_once Root . '/views/Catalog/view.php';
		return TRUE;
	}

}
