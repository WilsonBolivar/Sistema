<nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Cambiar Navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><img src="img/logo.jpg" width="100" height="50"></a>
            <ul class="nav navbar-nav navbar">
              <li><a href="../modelo/registar.php" class="dropdown-toggle glyphicon glyphicon-list-alt" data-toggle="dropdown"><b class="text-uppercase"> Registrar</b></a>
                     <ul class="dropdown-menu">
                        <li><a href="../modelo/registar.php">Registar</a></li>
                        <li><a href="#reusu" data-toggle="modal" data-target=".bs-example-modal-sm">Registar Usuario</a></li>
                    </ul>
            </li>
            </ul>
            <a href="../modelo/modificar.php" class="navbar-brand glyphicon glyphicon-pencil"> MODIFICAR</a>
            <a href="../modelo/eliminar.php" class="navbar-brand glyphicon glyphicon-trash"> ELIMINAR</a>
            <a href="../modelo/consulta.php" class="navbar-brand glyphicon glyphicon-search"> CONSULTA</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a  class="dropdown-toggle" data-toggle="dropdown"><img src="img/usuario.png" width="50"></a>
                     <ul class="dropdown-menu">
                        <li><a   class="glyphicon glyphicon-user"> Administrador</a></li>
                        <li><a href="login.php" class="glyphicon glyphicon-off" onclick='cerrar();'> Cerrar Session</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </nav>
