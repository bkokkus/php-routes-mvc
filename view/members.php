<!DOCTYPE html>
<html>
<head>
	<title>HTML SAYFA</title>

	<style type="text/css">
		.box {
			width: 500px;

		}

	</style>

</head>
<body>
	<center><h1>Üyeler Sayfası</h1></center>
	<div class="box">

		<h3><small>ROUTE</small> post işlemi yap</h3>
		<form action="" method="post">
			
			<input type="text" name="username" placeholder="ara ...">
			<button type="submit">Gönder</button>

		</form>
	</div>
	<hr>

	<h4>Kullanıcılar</h4>
	<ul>
	<?php foreach($users as $user) { ?>

		<li> <?php echo $user->full_name; ?> </li>
	<?php } ?>
	</ul>

</body>
</html>