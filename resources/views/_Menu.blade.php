
@section('menu')
<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">
                <img src="{{ url('/images/logo.png') }}" style="height: 65px;" />
            </a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li id='menuHome' name='menu-main' class="active"><a href="/">Home</a></li>               
                <li id='menuServicios'  name='menu-main'><a href="/Servicios">Servicios</a></li>
                <li id='menuGalerias' name='menu-main'><a href="/Galerias">Galeria</a></li>
                <!--<li id='menuCursos' name='menu-main'><a href="#">Cursos</a></li>-->
                <li id='menuContacto' name='menu-main'><a href="#">Contacto</a></li>
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

@endsection