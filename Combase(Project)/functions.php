<?php

// function emptyInputSignup($name, $email, $password, $cpassword, $user_type) {
// 	$result;
// 	if (empty($name) || empty($email) || empty($password) || empty($cpassword) || empty($user_type)) {
// 		$result = true;
// 	}
// 	else {
// 		$result = false;
// 	}
// 	return $result;
// }

// funtion invalidName($name) {
// 	$result;
// 	if (!preg_match("/^[a-zA-Z0-9]*$/"), $name) {
// 		$result = true;
// 	}
// 	else {
// 		$result = false;
// 	}
// 	return $result;
// }

// funtion invalidEmail($email) {
// 	$result;
// 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
// 		$result = true;
// 	}
// 	else {
// 		$result = false;
// 	}
// 	return $result;
// }

// funtion pwdMatch($password, $cpassword) {
// 	$result;
// 	if ($password !== $cpassword) {
// 		$result = true;
// 	}
// 	else {
// 		$result = false;
// 	}
// 	return $result;
// }

// funtion nameExists($conn, $name, $email) {
// 	$sql = "SELECT * FROM user_form WHERE name = ? OR email = ?;";
// 	$stmt = mysqli_stmt_init($conn);	
// }