@extends('_Layout')




@section('content')
      
       @include('_Services')
       @yield('services')

@endsection
    

@section('scripts')
      
<script>
menuSelected('Servicios');    
</script> 

@endsection
