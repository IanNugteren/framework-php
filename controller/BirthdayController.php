<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("birthday/overview", array(
		'birthdays' => getAllBirthdays()
	));
}

function create() {
	render("birthday/create");
}

function createRequest() {
	post_create();
	header("Location: index");	
}

function delete ($id) {
	deleteBirthday($id);
	header("Location: /New%20folder/birthday/index");
}

function edit ($id) {
	render("birthday/edit", array(
		'birthdayUsers' => getBirthdayById($id)
	));
}

function post_edit($id) {
	editBirthday($id);
}






