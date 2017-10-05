<?php

function addUser($firstname,$lastname,$email,$phone,$username,$password){
	global $dbconn;
	$query_add_user="INSERT INTO users(firstname,lastname,email,phone,username,password)VALUES('$firstname','$lastname','$email',
					'$phone','$username','$password')";
	$result_add_user=mysqli_query($dbconn, $query_add_user);
	if(!$result_add_user){
		die("Gabim gjat shtimit te kategoris" . mysqli_error($dbconn));
	}	
}
function findUsers(){
	global $dbconn;
	$query_users="SELECT * FROM users";
	return $result_all_users=mysqli_query($dbconn,$query_users);
}
/*
function findCategories(){
	global $dbconn;
	$query_categories="SELECT * FROM categories";
	return $result_all_categories=mysqli_query($dbconn,$query_categories);
}
function delteCategory($cat_del_id){
	global $dbconn;
	$query_del_cat="DELETE FROM categories WHERE categoryid=$cat_del_id";
	$result_del_cat=mysqli_query($dbconn, $query_del_cat);
	if(!$result_del_cat){
		die("Gabim gjat fshirjes te kategoris" . mysqli_error($dbconn));
	}
	header("Location : categories.php");
}
function findCategoryById($cat_id){
	global $dbconn;
	$query_select_cat="SELECT * FROM categories WHERE categoryid=$cat_id";
	return $result_select_cat=mysqli_query($dbconn, $query_select_cat);
}
function addCategory($cat_title){
	global $dbconn;
	$query_add_cat="INSERT INTO categories (title)VALUES('$cat_title')";
	$result_add_cat=mysqli_query($dbconn, $query_add_cat);
	if(!$result_add_cat){
		die("Gabim gjat shtimit te kategoris" . mysqli_error($dbconn));
	}	
}
function updateCategory($cat_id,$cat_title){
	global $dbconn;
	$query_update_cat="UPDATE categories SET title ='$cat_title' WHERE categoryid=$cat_id";
	$result_update_cat=mysqli_query($dbconn, $query_update_cat);
	if(!$result_update_cat){
		die("Gabim gjat modifimit te kategoris" . mysqli_error($dbconn));	
	}
}
*/
?>