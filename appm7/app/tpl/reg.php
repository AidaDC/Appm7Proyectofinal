
  <section>
    <h2>Register user section</h2>
    <div class="formreg">
                <form class="registre" name="formregister" method="post" action="<?= APP_W; ?>insert/insert">
                    <div id="hello"></div><!-- this is to show Hello name message -->
                    <label for="name">Nombre: <input type="text" name="name" value="" placeholder="Introduce un nombre" required></label></br></br>
                    <label for="email">Direccion de correo: <input type="email" placeholder="aaa@gmail.com" name="email" value="" placeholder="aaa@gmail.com" title="aaa@gmail.com" required></label></br></br>
                    <label for="dni">DNI: <input type="text" name="dni" value="" placeholder="Introduce un dni" required></label></br></br>
                    <label for="telefono">Telefono: <input type="text" name="telefono" pattern="^[9|8|7|6]\d{8}$" title="Debe contener nueve numeros." value="" placeholder="Introduce un telefono" required></label></br></br>
                    <label for="address">Direccion: <input type="text" name="direccion" value="" placeholder="Introduce una direccion" required></label></br></br>
                    <label for="poblacion">Poblacion:</label><input type="text" name="poblacion" value="" required></label></br></br> 
                    <label for="nusuarlio">Nombre de usuario: <input type="text" name="nusuario" value="" placeholder="Introduce un nombre de usuario" required></label></br></br>
                    <label for="password">Contraseña: <input type="password" name="password" value=""  placeholder="Introduce una contraseña"required></label></br></br>
                    <label for="rpassword">Repetir Contraseña: <input type="password" name="rpassword" value="" placeholder="Repetir la contraseña" required></label></br></br>
                    <input id="no" type="submit" value="Regsiter" id="regsend">
                </form>

              </div>
  </section>  