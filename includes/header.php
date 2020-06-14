<header id="header" class="header">
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2 col-xs-12">
							<div class="logo">
								<a href="http://wilshire-boulevard.ru/"><img src="img/logo3.png" alt="logo.png"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-12">
							<div class="mobile-menu"></div>
							<nav class="navbar navbar-default">
								<div class="collapse navbar-collapse">
									<ul id="nav" class="nav navbar-nav">
										<?php $itemId = isset($_GET['itemId']) ? $_GET['itemId'] : 0; ?>
										<li class="<?php echo ($_SERVER['REQUEST_URI']!='/rules.php' ? "current" : "")?>"><a href="http://wilshire-boulevard.ru/">Добро пожаловать!</a></li>
										<li><a href="/forum/">Форум</a></li>
										<li class="<?php echo ($_SERVER['REQUEST_URI']=='/index.php#blog' ? "current" : "")?>"><a href="<?php echo($_SERVER['REQUEST_URI']=='/rules.php' ? "http://wilshire-boulevard.ru/index.php#blog":"#blog")?>">Как начать играть?</a></li>
										<li class="<?php echo ($_SERVER['REQUEST_URI']=='/rules.php' ? "current" : "")?>"><a href="rules.php">Правила проекта</a></li>
										<li><a href ="#" onclick="loginBTN()">Личный Кабинет</a></li>
									</ul>
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
</header>