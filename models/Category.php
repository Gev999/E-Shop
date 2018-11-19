<?php
include_once Root . '/config/getDb.php';

class Category {

	public static function getCategoryList() {
			
		$link = getDb();
		$query = 'SELECT id, name FROM category ORDER BY sort_order ASC';
		$db = mysqli_query($link, $query) or die('Error' . mysqli_error($link));

		$categoryList = array();
		$i = 0;
		while ($row = mysqli_fetch_assoc($db)) {
			$categoryList[$i]['id'] = $row['id'];
			$categoryList[$i]['name'] = $row['name'];
			$i++;
		}
		mysqli_close($link);
		return $categoryList;
	}
	
	public static function getCatalogById($id){
		$link = getDb();
		$query = "SELECT * FROM product WHERE category_id=$id";
		$db = mysqli_query($link, $query) or die('Error query' . mysqli_error($link));
		$productList = array();
		$i = 0;
		while ($row = mysqli_fetch_assoc($db)) {
			$productList[$i]['id'] = $row['id'];
			$productList[$i]['name'] = $row['name'];
			$productList[$i]['category_id'] = $row['category_id'];
			$productList[$i]['code'] = $row['code'];
			$productList[$i]['price'] = $row['price'];
			$productList[$i]['avaliability'] = $row['avaliability'];
			$productList[$i]['brand'] = $row['brand'];
			$productList[$i]['image'] = $row['image'];
			$productList[$i]['description'] = $row['description'];
			$productList[$i]['is_new'] = $row['is_new'];
			$productList[$i]['is_recommended'] = $row['is_recommended'];
			$productList[$i]['status'] = $row['status'];
			$i++;
		}
		mysqli_close($link);
		return $productList;
	}

}
?>