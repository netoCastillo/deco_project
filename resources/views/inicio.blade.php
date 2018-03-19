@extends('_Layout')


@section('content')
       
       @include('_Slider')
       @yield('slider')

       @include('_Services')
       @yield('services')

       @include('_RecentEvents')
       @yield('events')

       @include('_Items')
       @yield('items')

       @include('_Social')
       @yield('social')

      

       @include('_Contact')
       @yield('contact')  

        
@endsection
    