<?php
function addUser($firstname,$lastname,$dep_id,$password,$email,$username,$phone,$registrar_id){
	global $dbconn;
	$query_add_user="INSERT INTO users(firstname,lastname,dep_id,password,email,username,phone,reg_id) VALUES('$firstname','$lastname', $dep_id,'$password','$email','$username','$phone', $registrar_id)";
	$result_add_user=mysqli_query($dbconn, $query_add_user) or 
		die("<span class='text-danger'>Gabim gjat shtimit te perdoruesit" . mysqli_error($dbconn)."</span>");
		
}
function addClient($client,$contactPerson,$position,$firstAddress,$secondAddress,$city,$state,$zip,$phone,$mobPhone,
$email,$web,$clientRegistrationNo,$fiscalNo,$vatNo,$clientType,$registrar_id,$date){
	global $dbconn;
	$query_add_client="INSERT INTO clients(client,contact_person,job_position,address_1,address_2,city,state,zip,tel_no,mobile_no,client_email,client_web,business_register_no,fiscal_no,vat_no,client_type,user_id,registration_date) 
	VALUES('$client','$contactPerson','$position','$firstAddress','$secondAddress','$city','$state','$zip','$phone',
	'$mobPhone','$email','$web','$clientRegistrationNo','$fiscalNo','$vatNo','$clientType',$registrar_id,'$date')";
	$result_add_client=mysqli_query($dbconn, $query_add_client);
	if(!$result_add_client){
		die("<span class='text-danger'>Gabim gjatë shtimit të klientit: ".mysqli_error($dbconn)."</span>");
	} else {
        return "Regjistrimi u realizua me sukses";
    }
}
function addService($servicename,$servicedescription,$actualprice,$registrar,$date){
	global $dbconn;
	$query_add_service="INSERT INTO services(service_name,service_description,actual_price,user_id,date) 
	VALUES('$servicename','$servicedescription',$actualprice,$registrar,'$date')";
	$result_add_service=mysqli_query($dbconn, $query_add_service);
	if(!$result_add_service){
		die("<span class='text-danger'>Gabim gjatë shtimit të sherbimit: ".mysqli_error($dbconn)."</span>");
	} else {
        return "Regjistrimi u realizua me sukses";
    }
}
function findUsers(){
	global $dbconn;
	$query_users="SELECT * FROM users";
	return $result_all_users=mysqli_query($dbconn,$query_users);
}
function findClients(){
	global $dbconn;
	$query_clients="SELECT * FROM clients";
	return $result_all_clients=mysqli_query($dbconn,$query_clients);
}

function findServices(){
	global $dbconn;
	$query_services="SELECT * FROM services";
	return $result_all_services=mysqli_query($dbconn,$query_services);
}
function findDepartments(){
	global $dbconn;
	$query_dep="SELECT dep_id, dep_name FROM departments";
	return $result_all_dep=mysqli_query($dbconn,$query_dep);
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