 <section>
    <h2>Reservar Viajes</h2>
 <div class="formreg">
        <form class="registre" name="formregister" method="post" action="<?=APP_W;?>insertviaje/insertar">
                   <table><tr><td><label for="fechai ">Fecha Ida:</label></td><td> <input type="date" name="fechain" value="" required></td></tr>
                   <tr><td> <label for="fechaf ">Fecha Vuelta:</label></td><td> <input type="date" name="fechafin" value="" required></td></tr>
                   <tr><td> <label for="destino">Destino:</label></td><td> <input type="text" name="destino" value="" placeholder="" required></td></tr>
                    <tr><td><label for="origen">Origen:</label></td><td> <input type="text" name="origen" value="" placeholder="" required></td></tr>
                    <tr><td><label for="dni">Dni: </label></td><td><input type="text" name="dni" value="" placeholder="" required><label> {Insertar el dni con el que te registraste}</label></td></tr>
                    <tr><td><input id="no" type="submit" value="Validar" id="regsend"></td></tr></table>
                </form>
              </div>
 
    </section> 