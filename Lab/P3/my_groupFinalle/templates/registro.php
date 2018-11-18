<script type="text/javascript" src="/wp-content/plugins/my_group1/js/formFetch.js" charset="utf-8"  async defer ></script> 
    
<h1>Gestión de Usuarios </h1>
    <form class="fom_usuario" action="?action=my_datos&proceso=registrar" method="POST">
        <label for="clienteMail">Tu correo</label>
        <br/>
        <input type="text" name="clienteMail"  size="20" maxlength="25" value="<?php print $user_email?>"
        readonly />
        <br/>
        <legend>Datos básicos</legend>
        <label for="nombre">Nombre</label>
        <br/>
        <input type="text" name="userName" class="item_requerid" size="20" maxlength="25" value="<?php print $MP_user["userName"] ?>"
        placeholder="Miguel Cervantes" />
        <br/>
        <label for="email">Email</label>
        <br/>
        <input type="text" name="email" class="item_requerid" size="20" maxlength="25" value="<?php print $MP_user["email"] ?>"
        placeholder="kiko@ic.es" />
        <br/>
        <input type="submit" value="Enviar">
        <input type="reset" value="Deshacer">
    </form>