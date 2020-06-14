<section id="register" class="login_module">
	<div id="id02" class="modal1"">
		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="close modal">&times;</span>
		
		<form class="modal1-content animate" action="" id="registerform" method="post"name="registerform" style="margin-left: 35%; margin-right: 35%; margin-top: 5%;">
			<div class="imgcontainer">
				<img src="/img/user_ava.png" alt="Avatar" class="avatar">
			</div>

			<div class="container_loginPg">
				<label for="firstName"><b>Name</b></label>
				<input type="text" placeholder="Create Name" name="firstName" required>

				<label for="lastName"><b>Surname</b></label>
				<input type="text" placeholder="Create Surname" name="lastName" required>

				<label for="email"><b>E-mail</b></label>
				<input type="text" placeholder="Enter your E-mail" name="email" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter new Password" name="psw" required>

				<button type="submit" id="register" name="register" class="submitbtn">Create new account!</button>
				
				<p class="regtext">Уже зарегистрированы? <a href="#" onclick="loginBTN()">Войдите в свой аккаунт</a>!</p>
			</div>

			<div class="container_loginPg" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>
	</div>
</section>