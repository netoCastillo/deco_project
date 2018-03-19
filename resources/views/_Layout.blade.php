<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DECOROSA - Decoración con Estilo</title>   

       
        <link href="{{ url('/Template/css/bootstrap.min.css') }}" rel="stylesheet"  />
        <link href="{{ url('/Template/css/font-awesome.css') }}" rel="stylesheet" />
        <link href="{{ url('/Template/css/animate.min.css') }}" rel="stylesheet"/>
        <link href="{{ url('/Template/css/prettyPhoto.css') }}" rel="stylesheet" />
        <link href="{{ url('/Template/css/main.css') }}" rel="stylesheet" />  
        <link href="{{ url('/Template/css/responsive.css') }}" rel="stylesheet"/>
        <link href="{{ url('/jquery-confirm/jquery-confirm.css') }}" rel="stylesheet" />


      
        
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('/Template/images/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('/Template/images/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('/Template/images/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ url('/Template/images/ico/apple-touch-icon-57-precomposed.png') }}">

      
   

</head>
<body  class="homepage">
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-whatsapp"></i>  +52 1 55 3082 1399​⁠​</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                        <div class="social">
                            <ul class="social-share">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                              
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
       @include('_Menu')
       @yield('menu')
    </header><!--/header-->


       @yield('content')
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    
    <script src="{{ url('/Template/js/jquery.js') }}"></script>
    <script src="{{ url('/Template/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/Template/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url('/Template/js/jquery.isotope.min.js') }}"></script>   
    <script src="{{ url('/Template/js/main.js') }}"></script>
    <script src="{{ url('/Template/js/wow.min.js') }}"></script>
    <script src="{{ url('/jquery-confirm/jquery-confirm.js') }}"></script>

    <script src="{{ url('/js/site.js') }}"></script>

    @yield('scripts')
    <!--<script src="@Url.Content("{{ url('/js/correo.js")"></script>
    <script src="@Url.Content("{{ url('/lib/jquery/dist/jquery.min.js")"></script>
    !-->


        <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
