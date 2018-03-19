



@section('slider')

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>

       
        <div class="carousel-inner">
            <div class="item active" style="background-image: url('{{ url('/images/Galerias/2/boda-6.jpeg')}}')">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1" style="    color: #ef0f7a;    background-color: white;    height: 93px;    padding-top: 7px;    padding-left: 12px;">Mesa de Dulces para todo tipo de eventos</h1>
                                <h2 class="animation animated-item-2">Descubre los mejores sabores para tu paladar, una amplia gama de opciones para ofrecer a tus invitados.</h2>
                             
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
          
            <div class="item" style="background-image: url('{{ url('/images/Galerias/2/boda-5.jpeg')}}')">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1" style="    color: #ef0f7a;    background-color: white;    height: 55px;    padding-top: 7px;    padding-left: 12px;">Decoramos tu Baby Shower</h1>
                                <h2 class="animation animated-item-2">dejanos encargarnos de tu evento, para recibir a ese nuevo integrante de la familia.</h2>
                            
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url('{{ url('/images/slider/slider.jpg')}}')">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1" style="    color: #ef0f7a;    background-color: white;    height: 55px;    padding-top: 7px;    padding-left: 12px;">Decorarmos tu salon de Bodas</h1>
                                <h2 class="animation animated-item-2">Dejanos crear el ambiente perfecto que lleve al mejor dia de tu vida. </h2>
                              
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

@endsection
