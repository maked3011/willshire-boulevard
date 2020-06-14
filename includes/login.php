		<section id="login" class="login_module">
			<!-- The Modal -->
			<div id="id01" class="modal1">
				<span onclick="document.getElementById('id01').style.display='none'"
			class="close" title="Close Modal">&times;</span>
				
				<!-- Modal Content -->
				<form class="modal1-content animate" action="" style="margin-left: 35%; margin-right: 35%; margin-top: 5%;">
					<div class="imgcontainer">
						<img src="/img/user_ava.png" alt="Avatar" class="avatar">
					</div>

					<div class="container_loginPg">
						<label for="email"><b>Почта</b></label>
						<input type="text" placeholder="Enter Email" name="email" required>

						<label for="psw"><b>Пароль</b></label>
						<input type="password" placeholder="Enter Password" name="psw" required>

						<button type="submit" class="submitbtn">Войти</button>
						<label>
							<input type="checkbox" checked="checked" name="remember"> Запомнить меня
						</label>
						<p class="regtext">Нет аккаунта? <a class="linkBTN" href="#" onclick="goToReg()">Создать аккаунт</a>!</p>
					</div>

					<div class="container_loginPg" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						<span class="psw">Forgot <a href="#">password?</a></span>
					</div>
				</form>
			</div>
		</section>