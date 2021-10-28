@extends('layouts.app')

@section('content')
    @foreach($movie as $film)
        <a href="{{ route('pagina-dettaglio',['id'=>$film['id']] )}}">
            <p>{{$film['title']}}</p>
        </a>
    @endforeach
@endsection
