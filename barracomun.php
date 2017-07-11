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
            </ul>
            <a href="buscar.php" class="navbar-brand glyphicon glyphicon-search"> CONSULTA</a>
            <a href="../modelo/pdf/reporte.php" class="navbar-brand glyphicon glyphicon-list-alt"> REPORTE</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a  class="dropdown-toggle" data-toggle="dropdown"><img src="img/usuario.png" width="50"></a>
                     <ul class="dropdown-menu">
                        <li><a  class="glyphicon glyphicon-user"> Comun</a></li>
                        <li><a href="../modelo/login.php" class="glyphicon glyphicon-off" onclick='cerrar();'> Cerrar Session</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </nav>
