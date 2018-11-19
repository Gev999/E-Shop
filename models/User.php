<?php
include_once Root . '/config/getDb.php';
    class User {
    	
		public static function register($name, $email, $password){
			$link = getDb();
			$query = "INSERT INTO User VALUES(NULL, '$name', '$email', '$password')";
			mysqli_query($link, $query) or die('Error query' . mysqli_error($link));
			mysqli_close($link);
		}
		
		public static function checkName($name) {
			$errorMess = null;
			if (empty($name)) 
				$errorMess = 'Поле "Имя" должно быть заполнено';
			elseif (strlen($name) < 3) 
				$errorMess = 'В поле "Имя" должно быть не менее 3 символов';
			return $errorMess;
		}
		
		public static function checkEmail($email){
			$errorMess = null;
			if (empty($email)) 
				$errorMess = 'Поле "E-mail" должно быть заполнено';
			elseif (!filter_var($email , FILTER_VALIDATE_EMAIL)) 
				$errorMess = 'Некорректное поле "E-mail"';
			return $errorMess;
		}
		
		public static function checkPass($password){
			$errorMess = null;
			if (empty($password)) 
				$errorMess = 'Поле "Имя" должно быть заполнено';
			elseif (strlen($password) < 5) 
				$errorMess = 'В поле "Имя" должно быть не менее 5 символов';
			return $errorMess;
		}
    }
?>