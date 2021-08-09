<?php
function showCategories(){
	include_once("db-config.php");
	

	 $categoryList = mysqli_query($mysqli, "select 'name', 'displayTitle', 'icon_image' from categories");
	 var_dump($categoryList);

	// Count the number of user/rows returned by query 
	$count = mysqli_num_rows($categoryList);
	if ($count > 0) {
	$categories = array();
	while( $row = mysqli_fetch_array( $categoryList, MYSQLI_ASSOC ) ) {
		array_push( $categories, $row );
	 }

	 return $categories;
	}
}

