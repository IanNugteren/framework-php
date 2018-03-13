<?php

function getAllBirthdays() 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function post_create() {
	$naam = $_POST["naam"];
	$dag = $_POST["dag"];
	$maand = $_POST["maand"];
	$jaar = $_POST["jaar"];
	$db = openDatabaseConnection();
	$sql = "INSERT INTO birthdays (person, day, month, year) VALUES ('$naam', '$dag', '$maand', '$jaar')";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}

function deleteBirthday ($id) {
    $db = openDatabaseConnection();
    $sql = "DELETE FROM birthdays WHERE id ='$id'";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
}

function editBirthday($id) {
	$naam = $_POST["naam"];
	$dag = $_POST["dag"];
	$maand = $_POST["maand"];
	$jaar = $_POST["jaar"];
	$db = openDatabaseConnection();
	$sql = "UPDATE birthdays SET person='$naam', day='$dag', month='$maand', year='$jaar' WHERE id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}

function getBirthdayById($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

