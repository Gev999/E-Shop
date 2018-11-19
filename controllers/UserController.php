<?php
class UserController {

	public function actionRegister() {
			
		$name = '';
		$email = '';
		$password = '';
		$errors['name'] = null;
		$errors['email'] = null;
		$errors['pass'] = null;
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = array();
			$errors['name'] = User::checkName($name);
			$errors['email'] = User::checkEmail($email);
			$errors['pass'] = User::checkPass($password);

			if ($errors['name']==null && $errors['email']==null && $errors['pass']==null) {
				User::register($name, $email, $password);
			}
		}
		
		require_once Root . '/views/User/register.php';

		return TRUE;
	}

}
?>