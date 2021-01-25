{{-- first-blade estende il layout e va a definire la section 'content', grazie a questa estensione del layout avremo anche gli altri elementi importati da main-layout-blade --}}
@extends('layouts.main-layout')  

@section('contenuto')
    <h1>Hello World from Blade Template Engine</h1>
@endsection