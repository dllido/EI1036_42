<main>
	<h1>Gestion de Usuarios </h1>
	<form class="fom_usuario" action="./../includes/registrar.php" method="POST">

		<legend>Datos básicos</legend>
		<label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="userName" class="item_requerid" size="20" maxlength="25" value="<?php print $userName ?>"
		 placeholder="Miguel Cervantes" />
		<br/>
		<label for="email">email</label>
		<br/>
		<input type="text" name="email" class="item_requerid" size="20" maxlength="25" value="<?php print $email ?>"
		 placeholder="kiko@ic.es" />
		<br/>

		<label for="login">Login</label>
		<br/>
		<input type="text" name="login" class="item_requerid" size="20" maxlength="25" value="<?php print $login ?>"
		 placeholder="Cervantes" />
		<br/>
		<label for="passwd">Password</label>
		<br/>
		<input type="password" name="passwd" class="item_requerid" size="8" maxlength="25" value="<?php print $passwd ?>"
		/>
		<br/>
		<input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
	</form>
</main>