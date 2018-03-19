@section('items')

<link href="{{url('/css/articulos.css')}}" rel="stylesheet">

<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <h2>Nuestros Articulos</h2>
            <p class="lead">Estos son algunos de los articulos que tenemos disponibles para tu evento <br> permitenos lograr ese evento perfecto que deseas.</p>
        </div>
        <div class="row">


    <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 shine_me">
            <a href="/articulos/16">
                <img src="{{url('/images/Articulos/16.jpg')}}" class="img-responsive">

                <i class="shine_effect"></i>
            </a>
           
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 shine_me">
            <a href="/articulos/33">
                <img src="{{url('/images/Articulos/33.jpg')}}" class="img-responsive">

                <i class="shine_effect"></i>
            </a>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 shine_me">
            <a href="/Home/DetalleArticulo?idArticulo=17">
                <img src="{{url('/images/Articulos/17.jpg')}}" class="img-responsive">

                <i class="shine_effect"></i>
            </a>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 shine_me">
            <a href="/Home/DetalleArticulo?idArticulo=18">
                <img src="{{url('/images/Articulos/18.jpg')}}" class="img-responsive">

                <i class="shine_effect"></i>
            </a>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 shine_me">
            <a href="/Home/DetalleArticulo?idArticulo=35">
                <img src="{{url('/images/Articulos/35.jpg')}}" class="img-responsive">

                <i class="shine_effect"></i>
            </a>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 shine_me">
            <a href="/Home/DetalleArticulo?idArticulo=30">
                <img src="{{url('/images/Articulos/30.jpg')}}" class="img-responsive">

                <i class="shine_effect"></i>
            </a>
        </div>
       
        </div>

    </div>


           
        </div><!--/.row-->
    </div><!--/.container-->
</section>

@endsection