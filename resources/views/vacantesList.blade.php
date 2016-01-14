@extends('layout/layout')

@section('content')
<div class="jumbotron">
                <h1 align="center">J o b p o s t i n g</h1>
                <p>¡Bienvenido! Puedes comenzar a buscar vacantes usando el formulario de la derecha o continuar buscando abajo.</p>
                </div>
                <div class="row">
                @foreach ($vacantepost as $value) 
                         @include('partials/postItem',compact('vacantepost'))     
                @endforeach    
                </div>
                <div class="row botoncito" text-align="right">
                    <br>
                    <br><a class="btn btn-default" href="#" role="button">Ver más »</a>
                </div>
                <!--/row-->
@stop                