<section id="intropage" class="login_module">
		<?php

		session_start();

		if(!isset($_SESSION["session_username"])):
		header("location:login.php");
		else:
		?>
	
		<?php include("includes/header.php"); ?>
		<div id="welcome">
		<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
		  <p><a href="logout.php">Выйти</a> из системы</p>
		</div>
	
		<?php include("includes/footer.php"); ?>
	
		<?php endif; ?>
		<div id="id03" class="modal1">
		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="close modal">&times;</span>
		
		 <h2>Добро пожаловать, <span> USER </span></h2>!
			<p><a href="logout.php">Выйти</a> из системы</p>
		</div>
</section>