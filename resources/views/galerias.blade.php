@extends('_Layout')

@section('content')
      
       @include('_Galerias')
       @yield('galerias')

@endsection
    

@section('scripts')
      
<script>
menuSelected('Galerias');    
</script> 

@endsection
