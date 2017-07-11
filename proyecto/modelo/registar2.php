<!DOCTYPE html>
<html>
  <head>
  <?php include("../vista/head.php");?>
  </head>
  <body>
  <header>
    <?php
      include ("../vista/barraprivi.php");
      ?>
  </header>
      <hr>
      <div class="container">
      <section>
      <div class="jumbotron">
      <form action="../controlador/guardar.php" method="POST">
        <tr>
          <h4 class="text-uppercase text-center">Representante</h4>
          <td>
            <input type="text" name="pnr"  placeholder="Primer Nombre" size="30"    maxlength="30" required  title="Ingrese solo Letras">
            <input type="text" name="snr"  placeholder="Segundo Nombre" size="30"   maxlength="30" required  title="Ingrese solo Letras">
            <input type="text" name="par"  placeholder="Primer Apellido" size="30"  maxlength="30" required  title="Ingrese solo Letras">
            <input type="text" name="sar"  placeholder="Segundo Apellido" size="30" maxlength="30" required  title="Ingrese solo Letras">
            <input type="text" name="nivel"  size="20" maxlength="20" title="Ingrese Su nivel de estudio" placeholder="Nivel de estudio"><br><br>  
            <input type="text" name="profesion"  size="30" maxlength="20" title="Ingrese cual es su Profesion de empleo" placeholder="Profesion">
            <input type="text" name="cargo"  size="20" maxlength="20" title="Ingrese su cargo de trabajo" placeholder="Cargo que desempeña">
            <input type="text" name="tel"  size="20" maxlength="15" title="Ingrese su telefono" placeholder="Telefono">
            <input type="text" name="tel1" size="20" maxlength="15" title="Ingrese su telefono de trabajo" placeholder="Telefono de trabajo">
            <input type="text" name="cuenta"  size="30" maxlength="20" title="Ingrese solo Numeros XXXX-XXXX-XX-XXXXXXXXXX" placeholder="Indrese su ceunta de Venezuela">
          </td>
          <hr>
          <td>
            <br>
            <input type="int" name="cedu" placeholder="Cedula" size="10" maxlength="10" required title="Ingrese solo Numeros" maxlength="9">
            <input type="date" name="fecha" placeholder="Año de nacimiento" title="Ingrese su Año de Nacimineto">
            <select name="sexo" required>
              <option>M</option>
              <option>F</option>
            </select> 
            <input type="text" name="nac" placeholder="Nacionalidad" size="30" required  title="Ingrese solo Letras">
            <input type="text" name="estado" size="20" maxlength="20" title="Ingrese Su estado" placeholder="Estado">
            <input type="text" name="municipio"  size="20" maxlength="20" title="Ingrese Su Municipio" placeholder="Municipio">
            <input type="text" name="parroquia"  size="20" maxlength="20" title="Ingrese Su Ciudad" placeholder="Ciudad"><br><br>
            <input type="text" name="vivienda" size="150" maxlength="300" required title="Ingrese vivienda" placeholder="Direccion de vivienda">
          </td>
         <hr>
         <h4 class="text-uppercase text-center" >Becado</h4>
           <td>
            <input type="text" name="pnb" id="pnb" placeholder="Primer Nombre" size="30"    maxlength="30" required  title="Ingrese solo Letras">
            <input type="text" name="snb" id="snb" placeholder="Segundo Nombre" size="30"   maxlength="30" title="Ingrese solo Letras">
            <input type="text" name="pab" id="pab" placeholder="Primer Apellido" size="30"  maxlength="30" required  title="Ingrese solo Letras">
            <input type="text" name="sab" id="sab" placeholder="Segundo Apellido" size="30" maxlength="30" title="Ingrese solo Letras">
            <input type="text" name="nivelb" id="nivelb" size="20" maxlength="20" title="Ingrese Su nivel de estudio" placeholder="Nivel de estudio"><br><br>
            <input type="text" name="fec" id="face" size="20" maxlength="20" title="Ingrese Su faccebook" placeholder="Ingresar su Fecebook">
            <input type="text" name="ins" id="ins" size="20" maxlength="20" title="Ingrese Su instagram" placeholder="Ingresar su instagram">
            <input type="text" name="twi" id="twi" size="20" maxlength="20" title="Ingrese Su twitter" placeholder="Ingresar su twitter">
            <label>Posee al guna Discapacidad:
            <select name="dis" id="dis">
              <option>NO</option>
              <option>SI</option>
             <input type="text" name="tipo" id="tipo" size="30" title="Indique su Discapacidad" value="Ninguna">
            </label><br><br>
            <label>Posee Beca:
            <select name="be" id="be">
              <option>NO</option>
              <option>SI</option>
             <input type="checkbox" name="dep" id="dep" value="SI"> Deportiva 
             <input type="checkbox" name="cul" id="cul" value="SI"> Cultural
             <input type="checkbox" name="eco" id="eco" value="SI"> Ecologica
             <input type="checkbox" name="pro" id="pro" value="SI"> Productiva
             <input type="checkbox" name="com" id="com" value="SI"> Comunal
             <input type="checkbox" name="madre" id="madre" value="SI"> Madres del Barrio    
             </label>      
          </td>
          <hr>
          <td >
            <br>
            <input type="int" name="cedub" id="cedub" placeholder="Cedula o identificacion" size="20" maxlength="10" title="Ingrese solo Numeros" maxlength="9">
            <input type="text" name="fechab" id="datapicker2" placeholder="Año de nacimiento" title="Ingrese su Año de Nacimineto">
            <select name="sexo" id="sexob" required>
              <option>M</option>
              <option>F</option>
            </select> 
            <input type="text" name="nacb" id="nacb" placeholder="Nacionalidad" size="30" required  title="Ingrese solo Letras">
            <input type="text" name="estadob" id="estadob" size="15" maxlength="20" title="Ingrese Su estado" placeholder="Estado">
            <input type="text" name="municipiob" id="municipiob" size="15" maxlength="20" title="Ingrese Su Municipio" placeholder="Municipio">
            <input type="text" name="parroquiab" id="parroquiab" size="20" maxlength="20" title="Ingrese Su Ciudad" placeholder="Ciudad"><br><br>
            <input type="text" name="viviendab" id="viviendab" size="150" maxlength="300" required title="Ingrese vivienda" placeholder="Direccion de vivienda"><br><br>
            <input type="submit"  class="btn btn-success" name="registar" value="Registar">
          </td>
        </tr>
      </form>
      </div>
    </section>
    </div>
    <hr>
    <?php include ("../vista/footer.php");?>
  </body>
</html>