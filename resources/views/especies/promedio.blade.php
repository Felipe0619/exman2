@extends('layouts.app')

@section('content')
<h1>Calificación promedio de las Atracciones que exhiben la Especie: {{ $especie->nombre }}</h1>
<p>Calificación promedio: {{ $promedio }}</p>
@endsection
