<?php
include_once Root . '/views/Layout/header.php'; ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 padding-right">
				
				<div class="signup-form"> <!-- sign up form -->
					<h2>Регистрация на сайте</h2>
					<form action="/user/register" method="post" autocomplete="off" novalidate="novalidate">
						<input type="text" placeholder="Имя" name="name" value="<? echo $name?>"/>
						<? if ($errors['name'] != null)  { 
							echo $errors['name'].'<br>'; 
						} ?>
						<input type="email" placeholder="E-mail" name="email" value="<? echo $email?>"/>
						<? if ($errors['email'] != null) {
							echo $errors['email'].'<br>'; 
						} ?>
						<input type="password" placeholder="Пароль" name="password" value="<? echo $password?>"/>
						<? if ($errors['pass'] != null) {
							echo $errors['pass'].'<br>'; 
						} ?>
						<button type="submit" name="submit" class="btn btn-default">Регистрация</button>
					</form>
				</div> <!-- sign up form -->
				
			</div>
		</div>
	</div>
</section>
<? for ($i=1; $i < 10; $i++) { 
	echo '<br>';
} ?>
<?php
include_once Root . '/views/Layout/footer.php';
?>