
  


  @extends('_Layout')

@section('content')


<link href="{{ url('/css/detalle-galeria.css') }}" rel="stylesheet"  />

<div class="container">
    <div class="row">
        <ul class="breadcrumb text-right" style="background-color:white;">
            <li><a href="/">Home</a></li>
            <li><a href="/Galerias">Galerias</a></li>
            <li class="active"><a href="#">{{ $album->nombre }}</a></li>
                  
        </ul>
    </div>
     <div class="center">
        <h2>{{$album->nombre}}</h2>
        <p class="lead">{{$album->descripcion}}</p>
    </div>

     <div class="blog">
        <div class="row">
            <div class="col-md-12">
                <div id="main_area">
                    <!-- Slider -->
                    <div class="row">
                        <div class="col-sm-6" id="slider-thumbs">
                            <!-- Bottom switcher of slider -->
                            <ul class="hide-bullets"> 

                                @foreach($imagenes  as $key =>$imagen)
                                
                                    <li class="col-sm-3">
                                            <a class="thumbnail" id="carousel-selector-{{($key-1)+1}}">
                                                <img src="{{url($imagen->url)}}">
                                            </a>
                                    </li>                                
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-xs-12" id="slider">
                                <!-- Top part of the slider -->
                                <div class="row">
                                    <div class="col-sm-12" id="carousel-bounding-box">
                                        <div class="carousel slide" id="myCarousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                            
                                             @foreach($imagenes as $key =>$imagen)

                                                       @if ($imagen === reset($imagenes))
                                                            <div class="item active" data-slide-number="{{($key-1)+1}}">
                                                                <img src="{{url($imagen->url)}}">
                                                            </div>
                                                      
                                                      @else
                                                            <div class="item" data-slide-number="{{($key-1)+1}}">
                                                                <img src="{{url($imagen->url)}}">
                                                            </div>
                                                      @endif

                                                   

                                             

                                                                     
                                            @endforeach

                                                  
                                            </div>
                                            <!-- Carousel nav -->
                                            <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <!--/Slider-->
                    </div>
                </div>
            </div>  

          
            
        </div>

    </div>
    

</div>


   


    @endsection


    
@section('scripts')
<script src="{{ url('/Template/js/jquery.js') }}"></script>
<script src="{{ url('/Template/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/js/detalle-galeria.js') }}"></script>
<script>
menuSelected('Galerias');    
</script> 

@endsection




    