@section('galerias')


<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <h2>Galerias</h2>
            <p class="lead">Conoce a traves de nuestra galeria los eventos en los que hemos participado ,para que te des una idea de lo que podemos lograr <br> para ti, para ese momento especial.</p>
        </div>

        <div class="row">

    <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="recent-work-wrap">
            <img class="img-responsive" src="{{ url('/images/Galerias/1/portada-1.jpg')}} " alt="">
            <div class="overlay">
                <div class="recent-work-inner">
                    <h3><a href="{{ url('/Gallery/GalleryDetail/1')}}">Baby Shower</a></h3>
                    <p>Decoramos tu evento para  esa personita que viene en camino</p>
                    <a href="{{ url('/Gallery/GalleryDetail/1')}}" style="color:white;"><i class="fa fa-eye"></i> Ir a Galeria</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="recent-work-wrap">
            <img class="img-responsive" src="{{ url('/images/Galerias/2/portada-2.jpg')}} " alt="">
            <div class="overlay">
                <div class="recent-work-inner">
                    <h3><a href="{{ url('/Gallery/GalleryDetail/2')}}">Bodas</a></h3>
                    <p>Danos la idea de que es lo que buscas para que ese dia, el mas importante de tu vida</p>

                    <a href="{{ url('/Gallery/GalleryDetail/2')}}" style="color:white;"><i class="fa fa-eye"></i> Ir a Galeria</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="recent-work-wrap">
            <img class="img-responsive" src="{{url('/images/Galerias/3/portada-3.jpg')}} " alt="">
            <div class="overlay">
                <div class="recent-work-inner">
                    <h3><a href="{{ url('/Gallery/GalleryDetail/3')}}">Ideas</a></h3>
                    <p>Distintas ideas, distintos ambientes, vista, tacto , olfato y gusto</p>
                    <a href="{{ url('/Gallery/GalleryDetail/3')}}" style="color:white;"><i class="fa fa-eye"></i> Ir a Galeria</a>
                </div>
            </div>
        </div>
    </div>

   
</div>



    <!--/.row-->
    </div><!--/.container-->
</section>


@endsection
