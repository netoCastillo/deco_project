
@section('contact')

<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{url('/css/contacto.css')}}" rel="stylesheet" />


<section id="contact">
    <div class="section-content">
        <h1 class="section-header">Ponte <span class="content-header wow fadeIn  animated" data-wow-delay="0.2s" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;"> en Contacto con Nosotros</span></h1>
        <h3>Dejanos hacer de tu evento una realidad, enviamos un mail y utiliza el numero telefonico para ponerte en contacto con nosotros</h3>
    </div>
    <div class="contact-section">
        <div class="container">
            <form>
                <div class="col-sm-12 col-xs-12  col-md-6 form-line">
                    <div class="form-group">
                        <label for="exampleInputUsername">Tu Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder=" Introduce tu nombre completo " required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Correo</label>
                        <input type="email" class="form-control" id="correo" placeholder=" Correo para poder ponernos en contacto contigo" required="">
                    </div>
                    <div class="form-group">
                        <label for="telephone">No. Telefono</label>
                        <input type="tel" class="form-control" id="telefono" placeholder=" Tu numero de telefono para ponernos en contacto contigo">
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12  col-md-6">
                    <div class="form-group">
                        <label for="description"> Mensaje</label>
                        <textarea class="form-control" id="mensaje" placeholder="¿En que podemos ayudarte?" required=""></textarea>
                    </div>
                    <div>
                        <a onclick="EnviarCorreo()" class="btn btn-default"><i class="fa fa-spinner fa-spin cargando" style="display:none;"></i><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar Mensaje</a>

                    </div>

                </div>
            </form>
        </div>
</div></section>
@endsection