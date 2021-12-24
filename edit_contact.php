<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("UPDATE `contacts` SET 
		first_name     = :first_name, 
		last_name      = :last_name, 
		email			= :email,  
		phone			= :phone, 
		address1		= :address1, 
		nights			= :nights, 
		city			= :city, 
		country			= :country,
		zipcode			= :zipcode,
		notes			= :notes, 
		chambre			= :chambre
		WHERE id = :id
		");

//Bind Values
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':address1', $_POST['address1']);
$db->bind(':nights', $_POST['nights']);
$db->bind(':city', $_POST['city']);
$db->bind(':country', $_POST['country']);
$db->bind(':zipcode', $_POST['zipcode']);
$db->bind(':chambre', $_POST['chambre']);
$db->bind(':notes', $_POST['notes']);
$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Contact was updated";
} else {
	echo "Could not add updated";
}
?>