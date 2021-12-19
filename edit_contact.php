<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("UPDATE `contacts` SET (first_name, last_name, email, phone, address1,nights, city,country, zipcode, notes, chambre)
						    VALUES (:first_name,:last_name,:email,:phone,:address1,:nights,:city,:country,:zipcode,:notes,:chambre)");

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

if($db->execute()){
	echo "Contact was updated";
} else {
	echo "Could not add updated";
}
?>